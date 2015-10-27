<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

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