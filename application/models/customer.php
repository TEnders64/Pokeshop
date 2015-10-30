<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {
	public function process($post){
		// var_dump($post);
		// die();
		$this->form_validation->set_rules("first_name", "Billing First Name", "required|alpha");
		$this->form_validation->set_rules("last_name", "Billing Last Name", "required|alpha");
		$this->form_validation->set_rules("email", "Billing Email", "required|valid_email]");
		$this->form_validation->set_rules("address1", "Billing Address 1", "required");
		$this->form_validation->set_rules("address2", "Billing Address 2", "alpha_numeric");
		$this->form_validation->set_rules("city", "Billing City", "required|alpha");
		$this->form_validation->set_rules("state", "Billing State", "required|alpha|exact_length[2]");
		$this->form_validation->set_rules("zip", "Billing Zip", "required|numeric");
		$this->form_validation->set_rules("CC_num", "Credit Card Number", "required|numeric|min_length[15]|max_length[19]");
		$this->form_validation->set_rules("month", "Billing Month", "required");
		$this->form_validation->set_rules("year", "Billing Year", "required");

		$this->form_validation->set_rules("first_name_s", "Shipping First Name", "required|alpha");
		$this->form_validation->set_rules("last_name_s", "Shipping Last Name", "required|alpha");
		$this->form_validation->set_rules("address1_s", "Shipping Address 1", "required");
		$this->form_validation->set_rules("address2_s", "Shipping Address 2", "alpha_numeric");
		$this->form_validation->set_rules("city_s", "Shipping City", "required|alpha");
		$this->form_validation->set_rules("state_s", "Shipping State", "required|alpha|exact_length[2]");
		$this->form_validation->set_rules("zip_s", "Shipping Zip", "required|numeric");

		if($this->form_validation->run() === false){
			$this->session->set_flashdata("errors", validation_errors());
			return false;
		}
		else{
			$query_ship = "INSERT INTO shipping (first_name, last_name, address1, address2, city, state, zip, created_at, updated_at) 
					VALUES (?,?,?,?,?,?,?, NOW(), NOW())";
			$values_ship = array($post['first_name_s'], $post['last_name_s'], $post['address1_s'], $post['address2_s'], $post['city_s'], $post['state_s'], $post['zip_s']);

			$this->db->query($query_ship, $values_ship);
			$address_id = $this->db->insert_id();
			
			$query_order = "INSERT INTO orders (address_id, email, created_at, updated_at) VALUES (?,?, NOW(), NOW())";
			$values_order = array($address_id, $post['email']);
			
			$this->db->query($query_order, $values_order);
			$order_id = $this->db->insert_id();

			$cart = $this->session->userdata('cart');
			foreach ($cart as $id => $quantity){
				$query_order_items = "INSERT INTO order_items (order_id, item_id, quantity, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
				$values_order_items = array($order_id, $id, $quantity);
				$this->db->query($query_order_items, $values_order_items);

				$query_pokemons = "UPDATE pokemons SET quantity = (quantity - ?), sold = (sold + ?) WHERE id = ? ";
				$values_pokemons = array($quantity, $quantity, $id);
				$this->db->query($query_pokemons,$values_pokemons);
			}
			return true;
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

	public function search_pokemon($post){
		$query = "SELECT * FROM pokemons WHERE name LIKE ? ";
		$values = '%'. $post['search'] . '%';
		return $this->db->query($query, $values)->result_array();
	}

	public function similar($type){
		$this_type = explode(" ",$type);

		$query = "SELECT id FROM pokemons WHERE types LIKE ?";
		$values = '%' . $this_type[count($this_type)-2] . '%';
		return $this->db->query($query,$values)->result_array();
	}

	public function types_of_pokemon_normal(){
			$query = "SELECT id , name FROM pokemons WHERE types LIKE '%normal%'";
			return $this->db->query($query)->result_array();
		}
	public function types_of_pokemon_fire(){
			$query = "SELECT id , name FROM pokemons WHERE types LIKE '%fire%'";
			return $this->db->query($query)->result_array();
		}
	public function types_of_pokemon_water(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%water%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_grass(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%grass%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_electric(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%electric%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_ice(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%ice%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_fighting(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%fighting%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_poison(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%poison%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_ground(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%ground%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_flying(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%flying%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_psychic(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%psychic%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_bug(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%bug%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_rock(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%rock%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_ghost(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%ghost%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_dark(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%dark%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_dragon(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%dragon%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_steel(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%steel%'";
		return $this->db->query($query)->result_array();
	}
	public function types_of_pokemon_fairy(){
		$query = "SELECT id , name FROM pokemons WHERE types LIKE '%fairy%'";
		return $this->db->query($query)->result_array();
	}


}
?>