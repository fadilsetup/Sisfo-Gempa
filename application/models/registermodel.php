<?php
class registermodel extends CI_Model{
	
	function process()
	{
		$username = $this->input->post('username');
		$email 	  = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'email'    => $email,
			'password' => $password
			);
		$this->db->insert('users',$data);
	}
}
?>