<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confeitaria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	
	public function pedidos()
	{
		$this->load->view('produtos');
	}

	public function entrar()
	{
		$this->load->view('entrar');
	}
	
	public function sobre()
	{
		$this->load->view('sobre');
	}
	
	public function carrinho()
	{
		$this->load->view('carrinho');
	}
	
	
	
}