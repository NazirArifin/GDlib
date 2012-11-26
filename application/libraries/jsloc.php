<?php
/*
 * ---------------------------------------------------------------
 *		JSLoc - Javascript CSS HTML Optimizer & Compressor
 * ---------------------------------------------------------------
 * File name	: jsloc.php
 * Version		: 2.0 BETA
 * Begin		: 2011-08-28
 * Last Update	: 2012-09-22
 * Author		: M. Nazir Arifin
 * Licence		: GNU-GPL v2
 * 
 * JSLoc is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 */
 
/*
 * History
 *
 * Version 2.0 Beta
 * - Only public method that static
 * - Default document type is HTML5
 * - Use closure to replace create_function (PHP 5.3)
 *
 */
 
class jsloc {
	public static function show() {
		header('Content-Type: text/html');
		ob_start(create_function('$buffer', 'return jsloc::minHTML($buffer);'));
	}

	public static function minCSS($data) {
		$instance = self::getInstance();
		
		$data = $instance->css_prefix($data);
		$lines = preg_split('/(\n|\r\n)/', $data);
		
		$aw_callback = create_function('&$item, $key', '$item = trim($item);');
		array_walk($lines, $aw_callback);
		
		$af_callback = create_function('$var', 'return ! empty($var);');
		$lines = array_filter($lines, $af_callback);
		
		$rs = implode('', $lines);
		$rs = preg_replace('@/\*.+\*/@Us', '', $rs);
		$rs = preg_replace('/\s+\{/Um', '{', $rs);
		
		$pr_callback = create_function('$str', '$s = explode(";", $str[1]); 
			$p = array();
				
			foreach ($s as $key=>$val) { 
				$s[$key] = trim($val); 
				$p = explode(":", $val); 
				foreach ($p as $k=>$v) { 
					$p[$k] = trim($v); 
					$p[$k] = str_replace(", ", ",", $p[$k]); 
				} 
				$s[$key] = implode(":", $p);
			}
			
			return \'{\' . implode(\';\', $s) . \'}\';');
		$rs = preg_replace_callback('/\{(.+)\}/Usm', $pr_callback, $rs);
		$rs = str_replace(array("\r\n", "\n"), '', $rs);
			
		return trim($rs);
	}
	
	public static function minHTML($data) {
		$instance = self::getInstance();
		
		// json?
		if (substr(trim($data), 0, 1) !== '<')
			return $data;
		// xml?
		if (substr(trim($data), 0, 5) == '<?xml')
			return $data;
		
		$doc = new DOMDocument('1.0', 'UTF-8');
		$doc->preserveWhiteSpace = false;
		@$doc->loadHTML($data);

		$html = $doc->getElementsByTagName('html')->item(0);
		$output = $instance->scanNode($html, TRUE);
		
		// get doctype
		preg_match('/(^.+)<html/mis', $data, $match);
		if (isset($match[1]))
			$output = trim($match[1]) . $output;
		
		// if no head tag assume part html
		$head = $doc->getElementsByTagName('head')->item(0);
		if (is_null($head))
			$output = preg_replace('/^(<html><body>)(.+)(<\/body><\/html>)$/mis', '$2', $output);
		
		return $output;
	}
	
	public static function minJS($data) {
		try {
			$JSMin = JSMin::minify($data);
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		return $JSMin;	
	}
	
	
	/*
	 * Protected Method
	 */
	protected function formatNode($node, &$output) {
		$nodeName = $node->nodeName;
		$has_child = $node->hasChildNodes();
		
		switch ($nodeName) {
			case '#cdata-section':
			case '#text':
			case '#comment':
				break;
			default:
				$output .= '<' . $nodeName;
		}
		
		// get tag attribute
		if ( ! is_null($node->attributes)) {
			$attr = $this->listAttr($node);
			if ( ! empty($attr))
				$output .= ' ' . join($attr, ' ');
		}
		
		switch ($nodeName) {
			// non tag element
			case '#cdata-section':
			case '#text':
				$parent = $node->parentNode->nodeName;
				if ($parent == 'style') {
					$output .= jsloc::minCSS($node->nodeValue);
				} else if ($parent == 'script') {
					$output .= trim(jsloc::minJS($node->nodeValue));
				} else {
					$text = $this->isWhiteSpace($node);
					if ( ! is_bool($text))
						$output .= htmlentities($text, ENT_QUOTES, "UTF-8");
				}
				break;
			case '#comment':
				$output .= '<!--' . $node->nodeValue . '-->';
				break;
			default:
				$output .= '>';
		}
		
		if ( ! $has_child) {
			switch ($nodeName) {
				case '#text':
				case '#comment':
				case '#cdata-section':
				case 'base': 
				case 'br': 
				case 'dl': 
				case 'hr': 
				case 'img': 
				case 'input': 
				case 'link': 
				case 'meta':
				case 'param':
					break;
				default:
					$output .= '</' . $nodeName . '>';
			}
		}
		
		if (is_null($node->nextSibling)) {
			if ( ! $has_child) {
				$parent = $node->parentNode;
				$output .= '</' . $parent->nodeName . '>';
			}
		}
	}
	
	protected function listAttr($node) {
		$attr = $node->attributes;
		
		if ( ! is_null($attr)) {
			$arr_attr 	= array();
			foreach ($attr as $item)
				$arr_attr[] = $item->name . '="' . $item->value . '"';
			
			natsort($arr_attr);
			return $arr_attr;
		} else
			return FALSE;
	}
	
	protected function isWhiteSpace($node) {
		$parent = $node->parentNode->nodeName;
		$str = $node->nodeValue;
		
		switch ($parent) {
			case 'textarea':
			case 'pre':
				return $str;
				break;
			default:
				if ($this->checkOwner($node, array('pre', 'textarea')))
					return $str;
				// replace space before and after
				$str = str_replace(array("\t", "\r\n", "\n", "\r", "\0", "\x0B", "\xA0"), ' ', $str);
				while(substr_count($str,"  ") != 0)
					$str = str_replace("  ", " ", $str);
		}
		
		if (empty($str) OR $str == ' ' OR $str == '')
			return TRUE;
		return $str;
	}

	/*
	 * Private Property
	 */
	private static $instance;
	
	/*
	 * Private Method
	 */
	private function __construct() { }
	
	private static function getInstance() {
		if (is_null(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c();
		} 
		return self::$instance;
	}
	
	private function scanNode($node, $first = FALSE) {
		static $output;
		if ($first) {
			$output = '';
			$this->formatNode($node, $output);
		}
		
		if ($node->hasChildNodes()) {
			$childs = $node->childNodes;
			foreach ($childs as $item) {
				$has_child = $item->hasChildNodes();
				$this->formatNode($item, $output);
				
				if ($has_child)
					$this->scanNode($item);
			}
		}
		
		if (is_null($node->nextSibling)) {
			$parent = $node->parentNode;
			
			// parent of html is document
			if ($parent->nodeName != '#document')
				$output .= '</' . $parent->nodeName . '>';
		}
		
		return $output;
	}
	
	private function checkOwner($node, $name) {
		while ($node) {
			if (is_array($name)) {
				if (in_array($node->nodeName, $name))
					return TRUE;
			} else {
				if ($node->nodeName == $name)
					return TRUE;
			}
			$node = $node->parentNode;
		}
		return FALSE;
	}
	
	private function css_prefix($css) {
		$pr_callback = create_function('$match', '$p = array(\'webkit\', \'moz\', \'o\', \'ms\', \'\');
			$r = \'\';
			
			foreach ($p as $v) {
				$t = $match[1];
				while(substr_count($t, \'/*VENDOR*/\') !== 0)
					$t = str_replace(\'/*VENDOR*/\', ($v == \'\' ? \'\' : "-{$v}-"), $t); 
				$r .= $t;
			}
			return $r;');
		
		$css = preg_replace_callback('/\/\*BEGIN\*\/(.+)\/\*END\*\//misU', $pr_callback, $css);
		
		$pr_callback = create_function('$match', '$p = array(\'webkit\', \'moz\', \'o\', \'ms\', \'\');
			$r = \'\';
			
			foreach ($p as $v)
				$r .= str_replace(\'/*VENDOR*/\', ($v == \'\' ? \'\' : "-{$v}-"), $match[0]);
			
			return $r;');
		$css = preg_replace_callback('/\/\*VENDOR\*\/(.+);/misU', $pr_callback, $css);
			
		return $css;
	}
}


/*
 * ---------------------------------------------------------------
 *  JSmin
 * ---------------------------------------------------------------
 *
 * @package JSLoc
 * @copyright 2002 Douglas Crockford <douglas@crockford.com> (jsmin.c)
 * @copyright 2008 Ryan Grove <ryan@wonko.com> (PHP Port)
 *
 */

class JSMin {
  const ORD_LF            = 10;
  const ORD_SPACE         = 32;
  const ACTION_KEEP_A     = 1;
  const ACTION_DELETE_A   = 2;
  const ACTION_DELETE_A_B = 3;

  protected $a           = '';
  protected $b           = '';
  protected $input       = '';
  protected $inputIndex  = 0;
  protected $inputLength = 0;
  protected $lookAhead   = null;
  protected $output      = '';

  // -- Public Static Methods --------------------------------------------------

  /**
   * Minify Javascript
   *
   * @uses __construct()
   * @uses min()
   * @param string $js Javascript to be minified
   * @return string
   */
  public static function minify($js) {
    $jsmin = new JSMin($js);
    return $jsmin->min();
  }

  // -- Public Instance Methods ------------------------------------------------

  /**
   * Constructor
   *
   * @param string $input Javascript to be minified
   */
  public function __construct($input) {
    $this->input       = str_replace("\r\n", "\n", $input);
    $this->inputLength = strlen($this->input);
  }

  // -- Protected Instance Methods ---------------------------------------------

  /**
   * Action -- do something! What to do is determined by the $command argument.
   *
   * action treats a string as a single character. Wow!
   * action recognizes a regular expression if it is preceded by ( or , or =.
   *
   * @uses next()
   * @uses get()
   * @throws JSMinException If parser errors are found:
   *         - Unterminated string literal
   *         - Unterminated regular expression set in regex literal
   *         - Unterminated regular expression literal
   * @param int $command One of class constants:
   *      ACTION_KEEP_A      Output A. Copy B to A. Get the next B.
   *      ACTION_DELETE_A    Copy B to A. Get the next B. (Delete A).
   *      ACTION_DELETE_A_B  Get the next B. (Delete B).
  */
  protected function action($command) {
    switch($command) {
      case self::ACTION_KEEP_A:
        $this->output .= $this->a;

      case self::ACTION_DELETE_A:
        $this->a = $this->b;

        if ($this->a === "'" || $this->a === '"') {
          for (;;) {
            $this->output .= $this->a;
            $this->a       = $this->get();

            if ($this->a === $this->b) {
              break;
            }

            if (ord($this->a) <= self::ORD_LF) {
              throw new JSMinException('Unterminated string literal.');
            }

            if ($this->a === '\\') {
              $this->output .= $this->a;
              $this->a       = $this->get();
            }
          }
        }

      case self::ACTION_DELETE_A_B:
        $this->b = $this->next();

        if ($this->b === '/' && (
            $this->a === '(' || $this->a === ',' || $this->a === '=' ||
            $this->a === ':' || $this->a === '[' || $this->a === '!' ||
            $this->a === '&' || $this->a === '|' || $this->a === '?' ||
            $this->a === '{' || $this->a === '}' || $this->a === ';' ||
            $this->a === "\n" )) {

          $this->output .= $this->a . $this->b;

          for (;;) {
            $this->a = $this->get();

            if ($this->a === '[') {
              /*
                inside a regex [...] set, which MAY contain a '/' itself. Example: mootools Form.Validator near line 460:
                  return Form.Validator.getValidator('IsEmpty').test(element) || (/^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]\.?){0,63}[a-z0-9!#$%&'*+/=?^_`{|}~-]@(?:(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)*[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\])$/i).test(element.get('value'));
              */
              for (;;) {
                $this->output .= $this->a;
                $this->a = $this->get();

                if ($this->a === ']') {
                    break;
                } elseif ($this->a === '\\') {
                  $this->output .= $this->a;
                  $this->a       = $this->get();
                } elseif (ord($this->a) <= self::ORD_LF) {
                  throw new JSMinException('Unterminated regular expression set in regex literal.');
                }
              }
            } elseif ($this->a === '/') {
              break;
            } elseif ($this->a === '\\') {
              $this->output .= $this->a;
              $this->a       = $this->get();
            } elseif (ord($this->a) <= self::ORD_LF) {
              throw new JSMinException('Unterminated regular expression literal.');
            }

            $this->output .= $this->a;
          }

          $this->b = $this->next();
        }
    }
  }

  /**
   * Get next char. Convert ctrl char to space.
   *
   * @return string|null
   */
  protected function get() {
    $c = $this->lookAhead;
    $this->lookAhead = null;

    if ($c === null) {
      if ($this->inputIndex < $this->inputLength) {
        $c = substr($this->input, $this->inputIndex, 1);
        $this->inputIndex += 1;
      } else {
        $c = null;
      }
    }

    if ($c === "\r") {
      return "\n";
    }

    if ($c === null || $c === "\n" || ord($c) >= self::ORD_SPACE) {
      return $c;
    }

    return ' ';
  }

  /**
   * Is $c a letter, digit, underscore, dollar sign, or non-ASCII character.
   *
   * @return bool
   */
  protected function isAlphaNum($c) {
    return ord($c) > 126 || $c === '\\' || preg_match('/^[\w\$]$/', $c) === 1;
  }

  /**
   * Perform minification, return result
   *
   * @uses action()
   * @uses isAlphaNum()
   * @return string
   */
  protected function min() {
    $this->a = "\n";
    $this->action(self::ACTION_DELETE_A_B);

    while ($this->a !== null) {
      switch ($this->a) {
        case ' ':
          if ($this->isAlphaNum($this->b)) {
            $this->action(self::ACTION_KEEP_A);
          } else {
            $this->action(self::ACTION_DELETE_A);
          }
          break;

        case "\n":
          switch ($this->b) {
            case '{':
            case '[':
            case '(':
            case '+':
            case '-':
              $this->action(self::ACTION_KEEP_A);
              break;

            case ' ':
              $this->action(self::ACTION_DELETE_A_B);
              break;

            default:
              if ($this->isAlphaNum($this->b)) {
                $this->action(self::ACTION_KEEP_A);
              }
              else {
                $this->action(self::ACTION_DELETE_A);
              }
          }
          break;

        default:
          switch ($this->b) {
            case ' ':
              if ($this->isAlphaNum($this->a)) {
                $this->action(self::ACTION_KEEP_A);
                break;
              }

              $this->action(self::ACTION_DELETE_A_B);
              break;

            case "\n":
              switch ($this->a) {
                case '}':
                case ']':
                case ')':
                case '+':
                case '-':
                case '"':
                case "'":
                  $this->action(self::ACTION_KEEP_A);
                  break;

                default:
                  if ($this->isAlphaNum($this->a)) {
                    $this->action(self::ACTION_KEEP_A);
                  }
                  else {
                    $this->action(self::ACTION_DELETE_A_B);
                  }
              }
              break;

            default:
              $this->action(self::ACTION_KEEP_A);
              break;
          }
      }
    }

    return $this->output;
  }

  /**
   * Get the next character, skipping over comments. peek() is used to see
   *  if a '/' is followed by a '/' or '*'.
   *
   * @uses get()
   * @uses peek()
   * @throws JSMinException On unterminated comment.
   * @return string
   */
  protected function next() {
    $c = $this->get();

    if ($c === '/') {
      switch($this->peek()) {
        case '/':
          for (;;) {
            $c = $this->get();

            if (ord($c) <= self::ORD_LF) {
              return $c;
            }
          }

        case '*':
          $this->get();

          for (;;) {
            switch($this->get()) {
              case '*':
                if ($this->peek() === '/') {
                  $this->get();
                  return ' ';
                }
                break;

              case null:
                throw new JSMinException('Unterminated comment.');
            }
          }

        default:
          return $c;
      }
    }

    return $c;
  }

  /**
   * Get next char. If is ctrl character, translate to a space or newline.
   *
   * @uses get()
   * @return string|null
   */
  protected function peek() {
    $this->lookAhead = $this->get();
    return $this->lookAhead;
  }
}

// -- Exceptions ---------------------------------------------------------------
class JSMinException extends Exception {}

