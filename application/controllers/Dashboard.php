<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('system_model');

	}

	public function index(){
		$systems_list = $this->system_model->get_all_systems();
	
		$data['title'] = 'FSD Systems Home Page';
		$data['content'] = 'dashboard_view';
		$data['user_systems_access'] = $this->session->userdata('fnbi_systems_access_list');
		$data['systems_list'] = $systems_list;		

		//var_dump($data['user_systems_access']);
		$this->load->view('include/template',$data);
	}
}
