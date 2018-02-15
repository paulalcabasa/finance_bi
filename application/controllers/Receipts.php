<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipts extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('receipt_model');
		$receipt_states = $this->receipt_model->get_receipt_states();
		$receipt_classes = $this->receipt_model->get_receipt_classes();
		$data['title'] = 'Receipts';
		$data['receipt_states'] = $receipt_states;
		$data['receipt_classes'] = $receipt_classes;
		$data['content'] = 'receivables/receipts_view';		
		$this->load->view('include/template',$data);
	}
}
