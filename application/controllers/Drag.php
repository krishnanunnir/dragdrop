<?php
class Drag extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}
	public function show(){
		$data['query']=$this->user->show_detail();

		$this->load->view('drag',$data);

	}
}
?>