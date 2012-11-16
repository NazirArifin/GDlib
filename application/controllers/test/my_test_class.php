<?php

require_once(APPPATH . '/controllers/test/Toast.php');

class My_test_class extends Toast {
	function My_test_class() {
		parent::Toast(__FILE__);
	}
	
	function test_some_action() {
		$my_var = 2 + 2;
		$this->_assert_equals($my_var, 4);
	}
}