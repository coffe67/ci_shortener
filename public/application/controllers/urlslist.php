<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Urlslist extends CI_Controller{

        public function index_list() {
            $this->load->model('urls','',TRUE);
            $this->load->helper('text');
            $datos=array();
            $datos=$this->urls->listaurls();
            $export['datos']=$datos;
            $this->load->view('templates/header');
            $this->load->view('urllist',$export);
            $this->load->view('templates/footer');    
        }
    }
?>