<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

public function all_pokemons(){
		$query = "SELECT * FROM pokemons WHERE id BETWEEN 1 AND 10";
		return $this->db->query($query)->result_array();

	}
	public function one_pokemon($pokemon_id){
		$query = "SELECT * FROM pokemons WHERE id = ?";
		$values = $pokemon_id;
		return $this->db->query($query, $values)->row_array();
	}


}
?>