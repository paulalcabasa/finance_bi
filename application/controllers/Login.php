<?php 
class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//~ $this->load->helper('login');
	}
	
	public function index(){
		$data['message'] = '';
		$this->load->view('login_view', $data);
	}
	
	public function check_login(){
		$this->load->model('login_model');
		$this->load->library('form_validation');
		$config = array(
					array(
						'field' => 'username',
						'label' => 'Username',
						'rules' => 'trim|required',
						'errors' => array(
										'required' => '* Please enter your username',
									),
						),
					array(
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required',
						'errors' => array(
										'required' => '* Please enter your password',
									)
						)
					);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == TRUE){
			$user_details = $this->login_model->check_user($this->input->post('username'),$this->input->post('password'));
			if(count($user_details) == 1){	

				$this->load->model('system_model');
				$system_access = $this->system_model->get_system_acess($user_details[0]->USER_ID);
				$systems_list = array();
				$systems_index = 0;
				foreach($system_access as $access){
					$systems_list[$systems_index] = $access->SYSTEM_ID;
					$systems_index++;
				}

				$user_data = array(
					'fnbi_user_id' => $user_details[0]->USER_ID,
					'fnbi_user_name' => $user_details[0]->USER_NAME,
					'fnbi_first_name' => $user_details[0]->FIRST_NAME,
					'fnbi_middle_name' => $user_details[0]->MIDDLE_NAME,
					'fnbi_last_name' => $user_details[0]->LAST_NAME,
					'fnbi_full_name' => $user_details[0]->FULL_NAME,
					'fnbi_division' => $user_details[0]->DIVISION,
					'fnbi_department' => $user_details[0]->DEPARTMENT,
					'fnbi_section' => $user_details[0]->SECTION,
					'fnbi_system_access' => $system_access,
					'fnbi_systems_access_list' => $systems_list
				);
				$this->session->set_userdata($user_data);
				redirect('dashboard');
			}
			else {
				$this->session->set_flashdata('login_err_message','<span class="text-danger">You have entered an incorrect username or password, please try again.</span>');
				redirect('login');
			}
		}
		else {
			$this->index();
		}
	}
	
	public function logout(){
		
		$user_data = $this->session->get_userdata();
		foreach($user_data as $key => $value){
			$this->session->unset_userdata($key);
		}
		redirect('login');
	}
}
