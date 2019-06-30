<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pointsinregion extends CI_Controller {

	public function index()
	{
		$data['coords'] = $this->input->get();
		
		if(!empty($data['coords']['ne']) && !empty($data['coords']['sw'])) {
			$this->show_results($data['coords']['ne'], $data['coords']['sw']);
			return;
		}

		switch($data['coords']) {
			case empty($data['coords']['ne']):
				$this->show_error('You must provide north east coordinate');
				break;
			case empty($data['coords']['sw']):
				$this->show_error('You must provide south west coordinate');
				break;
			default:
				$this->load->view('pointsinregion');
		}
		
	}
	
	function show_error($error) 
	{
		$response['success'] = 'false';
		$response['message'] = $error;
		
		echo json_encode($response);
	}
	
	function show_results($ne, $sw) 
	{
		$this->load->model('pointsinregion_model');
		$this->pointsinregion_model->get_data($ne, $sw);
	}
	
}