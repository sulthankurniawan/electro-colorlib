<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('easybucket_test/nav2');
		$this->load->view('easybucket_test/index');
	}

	public function about(){
		$this->load->view('about.php');
	}

	public function contact(){
		$this->load->view('contact.php');
	}

	public function store(){
		$this->load->view('easybucket_test/nav2');
		$this->load->view('easybucket_test/store');
	}

	public function transaction(){
		$this->load->view('easybucket_test/nav2');
		$this->load->view('easybucket_test/transaction');
	}

	public function checkout(){
		$this->load->view('easybucket_test/nav2');
		$this->load->view('easybucket_test/checkout');
	}
}
