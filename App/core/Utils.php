<?php 
class Utils extends CodeRunner{
	public function header(){
		debug($_SERVER['DOCUMENT_ROOT']);
		die();
		$this->load->view('header');
	}
	public function footer(){
		$this->load->view('footer');
	}
	public function style(){
		echo '
		<link rel="stylesheet" href="'.base_url('App/views/Style/main.css').'">';
	}
}


 ?>