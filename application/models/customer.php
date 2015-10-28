<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Model {

	public function all_pokemon($post){
		$query = "SELECT id, name FROM pokemons";
		$values = $post['all_pokemon'];
		return $this->db->query($query, $values)->result_array();
	}


}
?>