<?php
class Drag extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->database();
	}
	public function show(){
		$data['query']=$this->user->show_detail();

		$this->load->view('drag',$data);

	}
	public function update(){
		$i = 1;

//		$this->db->insert('Persons', $data);
		foreach ($_POST['item'] as $value) {
			$this->db->set('id',$i,FALSE);
			$this->db->where('firstname',$value);
			$this->db->update('Persons');
			$i++;
	    // UPDATE [Table] SET [Position] = $i WHERE [EntityId] = $value
	    //  $i++;
		}
	}

}
?>