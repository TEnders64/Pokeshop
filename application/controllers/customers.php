<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
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

	public function search(){
		echo json_encode($this->customer->search_pokemon($this->input->post()));
	}

	public function add_to_cart(){
		$id = $this->input->post('id');

		if ($this->session->userdata("cart")){
			$items = $this->session->userdata("cart");
		
			$items[$this->input->post('id')] = $this->input->post('quantity');

		 	$this->session->set_userdata("cart", $items);

		}else{

			$this->session->set_userdata("cart", array($this->input->post('id') => $this->input->post('quantity')));

		}
		 	redirect("/customers/show/".$id);
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
		$this->session->set_flashdata('success', '<h5 class="text-center">Cart Updated Successfully!</h5>');
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
	public function types_of_pokemon($post){
		// echo $post;
		// die();
		echo json_encode($this->customer->types_of_pokemon($post));
	}

	public function login(){
		if ($this->session->userdata('customer_id')){
			redirect('/customers/checkout');
		}else{
			$this->load->view('customer_login');
		}
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

	public function logout(){
		$this->session->sess_destroy();
		redirect("/customers");
	}
	// i give up...
	public function types_of_pokemon_normal(){
	
		echo json_encode($this->customer->types_of_pokemon_normal($this->input->get()));
	}
	public function types_of_pokemon_fire(){
	
		echo json_encode($this->customer->types_of_pokemon_fire($this->input->get()));
	}
	public function types_of_pokemon_water(){
	
		echo json_encode($this->customer->types_of_pokemon_water($this->input->get()));
	}
	public function types_of_pokemon_grass(){
	
		echo json_encode($this->customer->types_of_pokemon_grass($this->input->get()));
	}
	public function types_of_pokemon_electric(){
	
		echo json_encode($this->customer->types_of_pokemon_electric($this->input->get()));
	}
	public function types_of_pokemon_ice(){
	
		echo json_encode($this->customer->types_of_pokemon_ice($this->input->get()));
	}
	public function types_of_pokemon_fighting(){
	
		echo json_encode($this->customer->types_of_pokemon_fighting($this->input->get()));
	}
	public function types_of_pokemon_poison(){
	
		echo json_encode($this->customer->types_of_pokemon_poison($this->input->get()));
	}
	public function types_of_pokemon_ground(){
	
		echo json_encode($this->customer->types_of_pokemon_ground($this->input->get()));
	}
	public function types_of_pokemon_flying(){
	
		echo json_encode($this->customer->types_of_pokemon_flying($this->input->get()));
	}
	public function types_of_pokemon_psychic(){
	
		echo json_encode($this->customer->types_of_pokemon_psychic($this->input->get()));
	}
	public function types_of_pokemon_bug(){
	
		echo json_encode($this->customer->types_of_pokemon_bug($this->input->get()));
	}
	public function types_of_pokemon_rock(){
	
		echo json_encode($this->customer->types_of_pokemon_rock($this->input->get()));
	}
	public function types_of_pokemon_ghost(){
	
		echo json_encode($this->customer->types_of_pokemon_ghost($this->input->get()));
	}
	public function types_of_pokemon_dark(){
	
		echo json_encode($this->customer->types_of_pokemon_dark($this->input->get()));
	}
	public function types_of_pokemon_dragon(){
	
		echo json_encode($this->customer->types_of_pokemon_dragon($this->input->get()));
	}
	public function types_of_pokemon_steel(){
	
		echo json_encode($this->customer->types_of_pokemon_steel($this->input->get()));
	}
	public function types_of_pokemon_fairy(){
	
		echo json_encode($this->customer->types_of_pokemon_fairy($this->input->get()));
	}

}
?>
