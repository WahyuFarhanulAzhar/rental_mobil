<?php

class Index extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->model('rental_model');
    }

  public function index(){
    $data['mobil'] = $this->rental_model->get_data('mobil')->result();
    $this->load->view('templates_customer/header');
    $this->load->view('customer/dashboard', $data);
    $this->load->view('templates_customer/footer');
  }


}