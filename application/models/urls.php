<?php
Class Urls extends CI_Model{
    /**
     * Save a new Alias to the table
     * @param type $longurl URL 
     * @param type $alias  The new Alias for this URL
     */
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

    /**
     * Return an existing Alias, if any
     * @param type $url String, the URL to check
     * @return type $lias String, the alias, if any
     */
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

        //$this->db->select('id_url, long_url, alias_url, visitas_url,creacion_url');

        //$this->db->order_by('creacion_url', 'desc');

        //$query = $this->db->get('myurls');
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