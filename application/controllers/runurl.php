<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Runurl extends CI_Controller{

    public function index_run(){
		$this->load->model('runurls','',TRUE);
		
        $alias = $this->uri->segment(1);

		$this->runurls->redirect_url($alias);
    }
}
