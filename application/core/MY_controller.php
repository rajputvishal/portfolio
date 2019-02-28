<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    protected $data = array();
    public function __construct() {
        parent::__construct();
    }

    public function layout(){
        $this->load->helper('url');
        $this->data['header'] = $this->load->view('global/header', $this->data, TRUE);
        $this->data['footer'] = $this->load->view('global/footer', $this->data, TRUE);
        $this->data['page'] = $this->load->view($this->page, $this->data, TRUE);
        $this->load->view('global/main', $this->data);
    }
}