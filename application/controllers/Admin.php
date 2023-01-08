<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('pages/');
	}

    public function login()
    {
        $this->load->view('admin/auth/login');
    }

    public function action_login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
    }
}
