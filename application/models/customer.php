<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function register($post){
		// var_dump($post);
		// die();
		$this->form_validation->set_rules("first_name", "First Name", "required|alpha");
		$this->form_validation->set_rules("last_name", "Last Name", "required|alpha");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[customers.email]");
		$this->form_validation->set_rules("password", "Password", "min_length[8]|required");
		$this->form_validation->set_rules("c_password", "Confirm", "matches[password]|required");
		$this->form_validation->set_rules("address1","Address", "required");
		$this->form_validation->set_rules("address2","Address2", "alpha_numeric");
		$this->form_validation->set_rules("city","City", "alpha|required");
		$this->form_validation->set_rules("state","State", "alpha|required|exact_length[2]");
		$this->form_validation->set_rules("zip","Zip Code", "numeric|required|exact_length[5]");

		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("reg_errors", validation_errors());
		    return false;
		}
		else
		{
			$query = "INSERT INTO customers (first_name, last_name, email, password, created_at, updated_at)
			 		VALUES (?,?,?,?, NOW(),NOW())";
			$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);

			$this->db->query($query, $values);

			$query2 = "INSERT INTO addresses (first_name, last_name, address1, address2, city, state, zip, created_at, updated_at)
					  VALUES (?,?,?,?,?,?,?, NOW(), NOW())";
			$values2 = array($post['first_name'], $post['last_name'], $post['address1'], $post['address2'], $post['city'], $post['state'], $post['zip']);

			$this->db->query($query2, $values2);

			$this->session->set_flashdata("success","Registration Successful, Please Log In");
			return true;
		}
	}

	public function login($post){
		// var_dump($post);
		// die();
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("password", "password", "required");
		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("login_errors", validation_errors());
		    return false;
		}
		else
		{
			$query = "SELECT id, first_name FROM customers WHERE email = ? AND password = ?";
			$values = array($post['email'], $post['password']);

			$customer = $this->db->query($query,$values)->row_array();
			if ($customer){
				$this->session->set_userdata("customer_id", $customer['id']);
				$this->session->set_userdata("name", $customer['first_name']);
				return true;
			}else{
				$this->session->set_flashdata("login_errors","Incorrect credentials");
				return false;
			}
		}
	}

	public function all_pokemon(){
		$query = "SELECT * FROM pokemons";
		return $this->db->query($query)->result_array();

	}
	public function one_pokemon($pokemon_id){
		$query = "SELECT * FROM pokemons WHERE id = ?";
		$values = $pokemon_id;
		
		return $this->db->query($query, $values)->row_array();
	}

	public function similar($type){
		$this_type = explode(" ",$type);

		$query = "SELECT id FROM pokemons WHERE types LIKE ?";
		$values = '%' . $this_type[count($this_type)-2] . '%';

		return $this->db->query($query,$values)->result_array();

		
	}


}
?>