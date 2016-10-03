<?php
	class User extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public $firstname;
		public $lastname;
		public $email;
		public $password;
		public function show_detail(){
			$query=$this->db->get('Persons');
			return $query->result();
		}
	}
?>