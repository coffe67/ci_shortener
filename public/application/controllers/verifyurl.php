<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifyurl extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('urls','',TRUE);
  }

  function index(){
   //Este metodo valida los datos requeridos para poder procesar la URL
    $this->load->library('form_validation');
    $this->load->helper('string');

    $this->form_validation->set_rules('urllong', 'URL Long', 'trim|required|xss_clean');
    
    $this->load->view('templates/header');

    if($this->form_validation->run() == FALSE){
      
      $this->load->view('welcome_message');
      
    } else {

      //$shorturl_done= $this->set_shorturl($this->input->post('urllong'));
      $alias_url=$this->urls->check_alias($this->input->post('urllong'));
      
      if ($alias_url!='') {
        //Si ya existe un alias recuperamos informacion y enviamos vista correcta
        $datos['long_url']=$this->input->post('urllong');
        $datos['alias_url']=$alias_url;
        $this->load->view('doneurls',$datos);
      }else{
        $alias=random_string('alnum',6);
        $datos=$this->urls->crear_alias($this->input->post('urllong'), $alias);
        $this->load->view('doneurls',$datos);
      }
    }
    $this->load->view('templates/footer');
  }
 
  
}
?>