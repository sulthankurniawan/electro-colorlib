<?php

class Admin_Update extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("easybucket_test/navAdmin");
        $this->load->view("admin/adminUpdate");
	}
}