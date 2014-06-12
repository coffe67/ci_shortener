<?php
Class Urlslist extends CI_Model{

  	function listaurls(){
  		$urls=array();

        $urls[] = array('id_url', 'long_url', 'alias_url', 'visitas_url', 'creacion_url');

        $query = $this->db->query('select * from myurls order by creacion_url');

        if ($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $urls[] = $row;
            }
        }
        return $urls;
  	}
}
?>