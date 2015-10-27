<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->load->view('productspage');
	}
	
	public function login(){
		$this->load->view('show');
	}
}
?>