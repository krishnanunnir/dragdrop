<?php
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
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