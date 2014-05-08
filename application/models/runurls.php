<?php
Class Runurls extends CI_Model{
	
	function __construct(){
    	parent::__construct();
  	}

	function redirect_url($alias){
		$this->db->select('long_url,visitas_url');

		$query = $this->db->get_where('myurls', array('alias_url' => $alias), 1, 0);

		if ($query->num_rows() > 0){
	    	foreach ($query->result() as $row){
	    		$this->guardar_visita($alias,$row->visitas_url);
				redirect($row->long_url, 'refresh', 301);
	    	}
		} else {
			$errorurl['error']=base_url()."".$alias;
			$this->load->view('templates/header');
        	$this->load->view('errorpage',$errorurl);
        	$this->load->view('templates/footer');
	    	//echo "Lo sentimos pero la direccion: ".base_url()."".$alias." no ha sido encontrada";
		}
	}	

	 function guardar_visita($alias,$visitas) {
	 	$visitas+=1;
	 	$myquery = "update myurls set visitas_url='".$visitas."' where alias_url='".$alias."'";
	 	$this->db->query($myquery);
	}
}
?>