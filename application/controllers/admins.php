<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_logins');
	}


	public function login(){
		// var_dump($this->input->post());
		// die();
		if($this->admin->login($this->input->post())){
			redirect("/admins/admin_orders");
		}
		else{
			redirect("/admins/index");
		}
	}
	public function logout(){
		$this->session->session_destroy();
		redirect("/admins/index");
	}
	
	public function admin_orders(){
		$this->load->view('admin_orders');
	}
	
	public function search_orders(){
		echo json_encode($this->admin->search_orders($this->input->post()));
	}

	public function search_pokemon(){
		echo json_encode($this->admin->search_pokemon($this->input->post()));
	}

	public function new_pokemons(){

	}

	public function edit($pokemon_id){
		// var_dump($id);
		// die();
		$pokemon = $this->admin->one_pokemon($pokemon_id);
		$this->load->view('edit_pokemon', array("pokemon" => $pokemon));
	}

	public function delete($id){
		var_dump($id);
		die();
	}

	public function admin_pokemons(){
		$pokemons = $this->admin->all_pokemons();

		$this->load->view('admin_pokemons', array("pokemons" => $pokemons));
	}
}
?>
