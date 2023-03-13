<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('board_m');
        $this->load->helper(array('url', 'date'));
    }

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

    public function fileUpload()
    {
        $this->load->view('pages/fileUpload');
    }

    public function form()
    {
        $this->load->view('pages/member/form');
    }

    public function checkId()
    {
        $id = $this->uri->segment(2);
        $data['lists'] = $this->board_m->check_id($id);
        $this->load->view('pages/member/check_id', $data);
    }
}
