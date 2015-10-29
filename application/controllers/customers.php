<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		//$this->session->sess_destroy();
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

		if ($this->session->userdata("cart")){
			$items = $this->session->userdata("cart");
		
			$items[$this->input->post('id')] = $this->input->post('quantity');

		 	$this->session->set_userdata("cart", $items);


		}else{

			$this->session->set_userdata("cart", array($this->input->post('id') => $this->input->post('quantity')));

		}
		 	redirect("/customers");
	}

	public function loadcart(){
		if ($this->session->userdata("cart")){
			$items = $this->session->userdata("cart");

			$cart = array();
			foreach ($items as $item => $quantity){
				$pokemon = $this->customer->one_pokemon($item);
				$pokemon['in_cart'] = $quantity;

				$cart[] = $pokemon;
			}

			$this->session->set_userdata("cart", $cart);

			redirect("/customers/checkout");

		}else{
			redirect("/customers");
		}

	}

	public function checkout(){
		$this->load->view('checkout');
	}

	public function edit_cart(){
		$this->load->view("edit_cart");
	}

	public function update_cart(){
		var_dump($this->input->post());
		die();
		// if ($this->input->post()){
		// 	$this->input->post()
		// }
	}

	public function all_pokemon(){		
		echo json_encode($this->customer->all_pokemon($this->input->get()));
	}
}
?>
