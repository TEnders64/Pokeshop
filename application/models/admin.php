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
		$query = "SELECT * FROM pokemons WHERE name LIKE ? ";
		$values = '%'. $post['search'] . '%';
		return $this->db->query($query, $values)->result_array();
	}

	//work yet to do...
	public function search_orders($post){
		$query = "SELECT * FROM orders WHERE name = ?";
		$values = $post['search'];
		return $this->db->query($query, $values)->result_array();
	}

	public function all_pokemons(){
		$query = "SELECT * FROM pokemons WHERE id BETWEEN ? AND ?";
		$values = array(1,100);
		return $this->db->query($query,$values)->result_array();

	}

	public function one_pokemon($pokemon_id){
		$query = "SELECT * FROM pokemons WHERE id = ?";
		$values = $pokemon_id;
		return $this->db->query($query, $values)->row_array();
	}

	public function create($post){
		$this->form_validation->set_rules("name", "name", "required");
		$this->form_validation->set_rules("price", "price", "required");
		$this->form_validation->set_rules("description", "description", "required");
		$this->form_validation->set_rules("height", "height", "required");
		$this->form_validation->set_rules("weight", "weight", "required");
		$this->form_validation->set_rules("speed", "speed", "required");
		$this->form_validation->set_rules("exp", "exp", "required");
		$this->form_validation->set_rules("attack", "attack", "required");
		$this->form_validation->set_rules("defense", "defense", "required");
		$this->form_validation->set_rules("abilities", "abilities", "required");
		$this->form_validation->set_rules("types", "types", "required");
		
		if($this->form_validation->run() === false){
			$this->session->set_flashdata("errors", validation_errors());
			return false;
		}
		else{

			$count = $this->db->query("SELECT COUNT(id) as count FROM pokemons")->row_array();
			$new_id = $count['count'] + 1;
			$query = "INSERT INTO pokemons (id, name, price, description, height, weight, speed, exp, attack, defense, abilities, types, created_at, updated_at)
					VALUES (?,?,?,?,?,?,?,?,?,?,?,?, NOW(), NOW())";
			$values = array($new_id, $post['name'], $post['price'], $post['description'], $post['height'], $post['weight'], $post['speed'], $post['exp'], $post['attack'], $post['defense'], $post['abilities'], $post['types']);

			$this->db->query($query,$values);
			return true;
		}
	}

	public function update($id, $post){
		$query = "UPDATE pokemons SET price = ?, description = ?, height = ?, weight = ?, speed = ?, exp = ?, attack = ?, defense = ?, abilities = ?, types = ?, updated_at = NOW() WHERE id = ?";
		$values = array($post['price'], $post['description'], $post['height'], $post['weight'], $post['speed'], $post['exp'], $post['attack'], $post['defense'], $post['abilities'], $post['types'], $id);

		$this->db->query($query, $values);
	}

	public function delete($id){
		$query = "DELETE FROM pokemons WHERE id = ?";
		$values = $id;

		$this->db->query($query,$values);
	}

}
?>
