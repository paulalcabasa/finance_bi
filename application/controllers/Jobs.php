<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('jobs_model');

	}

	public function index(){
		
		$scheduled_jobs = $this->jobs_model->get_all_systems();
	
		$data['title'] = 'Oracle Scheduled Jobs';
		$data['content'] = 'schedule_jobs_view';
		$data['scheduled_jobs'] = $scheduled_jobs;
	
		//var_dump($data['user_systems_access']);
		$this->load->view('include/template',$data);
	}
}
