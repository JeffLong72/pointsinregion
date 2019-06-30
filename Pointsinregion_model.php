<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pointsinregion_model extends CI_Model {
	
	public function get_data($ne = 0, $sw = 0)
	{
		$ne = explode(",", $ne);
		$sw = explode(",", $sw);
		
		$ne['lat'] = (!empty($ne[0])) ? floatval($ne[0]) : 0;
		$ne['lng'] = (!empty($ne[1])) ? floatval($ne[1]) : 0;
		
		$sw['lat'] = (!empty($sw[0])) ? floatval($sw[0]) : 0;
		$sw['lng'] = (!empty($sw[1])) ? floatval($sw[1]) : 0;	
		
		$query = $this->db->query('SELECT * 
					   FROM `data`
					   WHERE features_properties_latitute BETWEEN '.$sw['lat'].' AND '.$ne['lat'].' 
					   AND features_properties_longitude BETWEEN '.$sw['lng'].' AND '.$ne['lng'].'
					   ');
		$result = $query->result_array();
		
		$data = array();
		
		if(!empty($result)) {
			
			$data['success'] = 'true';
			$data['message'] = 'great';
			$data['data'] = array();
			
			$i = 0;
			
			foreach($result as $r){
				
				$data['data'][$i]['location_name'] = $r['features_properties_commonname'];
				$data['data'][$i]['Coordinate'] = $r['features_properties_latitute'].",".$r['features_properties_longitude'];
				
				$i++;
			}
		}		
		else {
			
			$data['success'] = 'false';
			$data['message'] = 'no results found';
		}

		echo json_encode($data);
		
	}

}
