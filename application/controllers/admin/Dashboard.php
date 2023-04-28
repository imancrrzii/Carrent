<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rental_model');
    }

    public function index()
    {
        $this->load->view('admin/dashboard');
    }
}
