<?php

class Home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('landing');
        $this->load->view('templates/footer');
    }
}

