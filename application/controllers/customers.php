<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->load->view('productspage');
	}
	
	public function show(){
		$this->load->view('show_pokemon');
	}
}
?>
