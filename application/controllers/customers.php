<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->load->view('productspage');
	}
	
	public function show($pokemon_id){
		$pokemon = $this->customer->one_pokemon($pokemon_id);
		$this->load->view('show_pokemon', array("pokemon" => $pokemon));
	}
	public function add_to_cart(){
		
	}
	public function all_pokemon(){		
		echo json_encode($this->customer->all_pokemon($this->input->get()));
	}
}
?>
