<?php
class Page_admin_dokumen extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}
	
	function get_posts($query, $post_per_page,$current_page) {
		$offset=($current_page-1)*$post_per_page;
		if($current_page==1){
			$offset = 0;
		}
		$sql = $this->db->get('tb_dokumen', 0, 10);
		$query = $this->db->query($sql, array($query, $offset, $post_per_page));
		return $query->result_array();
	}
	
	function get_numrows($query){
		$rows=0;
		$sql = $this->db->get('tb_dokumen', 0, 10);
		$query = $this->db->query($sql, array($query));
		$rows=$query->num_rows();
		return $rows;
	}
	
	function highlightWords($string,$words,$ajax=false){
		$words=explode(' ',$words);
		for($i=0;$i<sizeOf($words);$i++){
			if($ajax==true){
				$string = str_ireplace($words[$i], '<strong class=\"highlight\">'.$words[$i].'<\/strong>', $string);
			}
			else {
				$string = str_ireplace($words[$i], '<strong class="highlight">'.$words[$i].'</strong>', $string);
			}
		}
		return $string;
	}
	
	function cleanHTML($input, $ending=''){
		$output = strip_tags($input);
		$output = substr($output, 0, 100);
		$output .= $ending;
		return $output;
	}
}