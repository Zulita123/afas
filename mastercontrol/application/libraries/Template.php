

<?php
class Template{
		protected $_ci;


	function __construct(){
		$this->_ci = &get_instance();
	}

	function theme_main($template, $data=null){
		$data['_content'] = $this->_ci->load->view($template, $data, TRUE);
		$this->_ci->load->view('template/main.php',$data);
	}
}
?>