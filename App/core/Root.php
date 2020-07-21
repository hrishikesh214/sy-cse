<?php 

class Root extends CodeRunner{
	public function index(){
		redirect(base_url('Root/Content'));
	}
	public function Content(){
		$p = $this->router->segment();
		$_path = explode("~",$p);
		$p_id = $_path[0];
		$folder_path =  APPPATH.'/root/'.implode('/',$_path);
		$linkpath = explode('/', $folder_path);
		$linkpath = array_diff($linkpath, array(APPPATH,'root'));
		$linkpath = implode('~', $linkpath);
		$data['folder_path'] = "Root".implode('/',$_path);
		$_base = array_diff(scandir($folder_path), array('.', '..'));
		$_base = array_values($_base);
		$data['files'] = $_base;
		$check_dirs = array();
		$links = array();
		foreach($_base as $x){
			if(is_dir($folder_path.'/'.$x)){
				array_push($check_dirs,'folder');
				array_push($links,base_url('Root/Content/'.$linkpath.'~'.$x));
			}
			else{
				array_push($check_dirs,'file');
				array_push($links,base_url('Root/File/'.$linkpath.'~'.$x));
			}
		}
		$data['check_dirs']  =$check_dirs;
		$data['links']  =$links;
		$this->load->view('content',$data);
	
	}

	public function File(){
		$file_path = $this->router->segment();
		$file_path = str_replace("~", "/", $file_path);
		$file_path = base_url(APPPATH.'/root'.$file_path);
		$data['file'] = $file_path;
		$this->load->view('file_view',$data);
	}

}

 ?>