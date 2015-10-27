<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {
	
	public function login($post){
		$this->form_validation->set_rules("email", "email", "required");
		$this->form_validation->set_rules("password", "password", "required");
		
		if($this->form_validation->run() === false){
			$this->session->set_flashdata("errors", validation_errors());
		}
		else{
			$query = "SELECT id FROM admins WHERE email = ? AND password =?";
			$values = array($post['email'], $post['password']);
			$admin = $this->db->query($query, $values)->row_array();
			if(!empty($admin)){
				//admin found
				$this->session->set_userdata("id", $admin['id']);
				return true;
			}
			else{
				//no admin
				$this->session->set_flashdata("errors", "<p>Invalid credentials</p>");
				return false;
			}
		}
	}

	public function search_pokemon($post){
		$query = "SELECT * FROM pokemons WHERE name = ?";
		$values = $post['search'];
		return $this->db->query($query, $values)->result_array();
	}

	//work yet to do...
	public function search_orders($post){
		$query = "SELECT * FROM orders WHERE name = ?";
		$values = $post['search'];
		return $this->db->query($query, $values)->result_array();
	}

}
?>