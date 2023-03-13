<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function ex9_2()
    {
        $this->load->view('pages/ex9-2');
    }

    public function ex9_3()
    {
        $this->load->view('pages/ex9-3');
    }

    public function fileUpload(){
        $this->load->view('pages/fileUpload');
    }

    public function form(){
        $this->load->view('pages/member/form');
    }
}
