<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

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