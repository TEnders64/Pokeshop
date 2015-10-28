<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->load->view('productspage');
	}
	
	public function show($pokemon_id){
		$pokemons = $this->customer->one_pokemon($pokemon_id);

		$others = $this->customer->similar($pokemons['types']);

		$similars = array();
		for ($i = 0; $i < 5; $i++){
			$similar = $others[rand(0,count($others)-1)];
			$similars[] = $similar;
		}

		$this->load->view('show_pokemon', array(
			"pokemon" => $pokemons,
			"similars" => $similars
			));
	}
	public function add_to_cart(){
		
	}
	public function all_pokemon(){		
		echo json_encode($this->customer->all_pokemon($this->input->get()));
	}
}
?>
