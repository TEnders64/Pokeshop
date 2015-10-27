<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function index()
	{
		$this->load->view('adminlogins');
	}


	public function login(){
		// var_dump($this->input->post());
		// die();
		if($this->admin->login($this->input->post())){
			redirect("/admins/adminorders");
		}
		else{
			redirect("/admins/index");
		}
	}
	
	public function adminorders(){
		$this->load->view('adminorders');
	}
	
	public function search_orders(){
		echo json_encode($this->admin->search_orders($this->input->post()));
	}

	public function search_pokemon(){
		echo json_encode($this->admin->search_pokemon($this->input->post()));
	}
}
?>