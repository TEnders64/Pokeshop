<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		// $this->session->sess_destroy();
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
			$ids = $this->session->userdata("cart");
			// var_dump($ids);
			// die();
			$cart = array();
			foreach ($ids as $id => $quantity){
				$pokemon = $this->customer->one_pokemon($id);
				$pokemon['in_cart'] = $quantity;

				$cart[] = $pokemon;
			}
			// var_dump($cart);
			// die();

			$this->load->view('edit_cart', array("cart" => $cart));
		}else{
			redirect("/customers");
		}

	}

	public function edit_cart(){

		if ($this->session->userdata("cart")){
			$ids = $this->session->userdata("cart");

			$cart = array();
			foreach ($ids as $id => $quantity){
				$pokemon = $this->customer->one_pokemon($id);
				$pokemon['in_cart'] = $quantity;

				$cart[] = $pokemon;
			}

			$this->load->view('edit_cart', array("cart" => $cart));
		}

	}

	public function update_cart(){

		$cart = array();

		foreach ($this->input->post() as $id => $quantity){
			$cart[$id] = $quantity;

		}

		$this->session->set_userdata('cart', $cart);

		redirect("/customers/loadcart");
	}

	public function checkout(){
		if ($this->session->userdata("cart")){
			$ids = $this->session->userdata("cart");

			$cart = array();
			foreach ($ids as $id => $quantity){
				$pokemon = $this->customer->one_pokemon($id);
				$pokemon['in_cart'] = $quantity;

				$cart[] = $pokemon;
			}

			$this->load->view('checkout', array("cart" => $cart));
		}
	}

	public function all_pokemon(){		
		echo json_encode($this->customer->all_pokemon($this->input->get()));
	}

	public function login(){
		$this->load->view('customer_login');
	}

	public function validate_login(){
		$result = $this->customer->login($this->input->post());
		if ($result){
			redirect("/customers/checkout");
		}else{
			redirect("/customers/login");
		}
	}

	public function validate_registration(){
		$this->customer->register($this->input->post());
		
		redirect("/customers/login");
	}
}
?>
