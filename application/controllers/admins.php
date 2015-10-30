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
	public function logoff(){
		$this->session->sess_destroy();
		redirect("/admins/index");
	}
	
	public function admin_orders(){
		if ($this->session->userdata('id') != null){
			$this->load->view('admin_orders');
		}
		else{
			redirect('/');
		}
	}
	
	public function search_orders(){
		echo json_encode($this->admin->search_orders($this->input->post()));
	}

	public function search_pokemon(){
		echo json_encode($this->admin->search_pokemon($this->input->post()));
	}

	public function new_pokemon(){
		if ($this->session->userdata('id') != null){
			$this->load->view("new_pokemon");
		}
		else{
			redirect('/');
		}
	}

	public function create(){
		if ($this->session->userdata('id') != null){
			if($this->admin->create($this->input->post())){
				redirect("/admins/admin_pokemons");

			}
			else{
				redirect('/admins/new_pokemon');
			}
		}
		else{
			redirect('/');
		}
	}

	public function edit($pokemon_id){
		// var_dump($id);
		// die();
		if ($this->session->userdata('id') != null){
			$pokemon = $this->admin->one_pokemon($pokemon_id);
			$this->load->view('edit_pokemon', array("pokemon" => $pokemon));
		}
		else{
			redirect("/customers");
		}
	}

	public function delete($id){
		if ($this->session->userdata('id') != null){
			$this->admin->delete($id);
		}
		else{
			redirect('/');
		}

	}

	public function update($id){

		$this->admin->update($id, $this->input->post());
		redirect("/admins/admin_pokemons");
	}

	public function admin_pokemons(){
		if ($this->session->userdata('id') != null){
			$pokemons = $this->admin->all_pokemons();
			$this->load->view('admin_pokemons', array("pokemons" => $pokemons));
		}
		else{
			redirect('/');
		}
	
	}
}
?>
