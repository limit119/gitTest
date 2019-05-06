<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'hello word';
    }

	public function listUser()
	{
        $this->load->view('welcome_message');
	    echo 'hello word';
	}
}
