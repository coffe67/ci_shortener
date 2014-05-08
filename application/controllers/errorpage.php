<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Errorpage extends CI_Controller{

    public function index_error(){
		
        $errorurl['error'] = $this->uri->segment(1);
        $this->load->view('templates/header');
        $this->load->view('errorpage',$errorurl);
        $this->load->view('templates/footer');
    }
}