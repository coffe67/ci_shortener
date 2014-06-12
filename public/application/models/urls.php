<?php
Class Urls extends CI_Model{

    function crear_alias($longurl, $alias){
		$data = array(
			'id_url'=>'',
	    	'long_url' => $longurl,
	    	'alias_url' => $alias,
	    	'visitas_url'=> 0,
	    	'creacion_url' => date("Y-m-d H:i:s")
		);
		$this->db->insert('myurls', $data);
		return $data;
    }

    function check_alias($longurl){
		$this->db->select('alias_url');
		$query = $this->db->get_where('myurls', array('long_url' => $longurl), 1, 0);
		$alias="";
		if ($query->num_rows() > 0){
	   		foreach ($query->result() as $row){
				$alias = $row->alias_url;
	    	}
		}
		return $alias;
    }
    function listaurls(){
  		$urls=array();

        $urls[] = array('id_url', 'long_url', 'alias_url', 'visitas_url', 'creacion_url');

        $query = $this->db->query('select * from myurls order by creacion_url');
   
        if ($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $urls[] = $row;
            }
        }else{
            $urls['id_url']='error en 0';
        }
        return $urls;
  	}
}
?>