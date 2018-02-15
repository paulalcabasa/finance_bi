<?php

class Login_model extends CI_Model {
	
	private $oracle = NULL;
	
	public function __construct(){
		
		parent::__construct();
		$this->oracle = $this->load->database('oracle', true);
	}

	public function check_user($username,$password){

		$sql = "SELECT *
				FROM (SELECT usr.user_id,
				            usr.user_name,
				            ppf.first_name,
				            ppf.middle_names middle_name,
				            ppf.last_name,
				            ppf.full_name,
				            ppf.attribute2 division,
				            ppf.attribute3 department,
				            ppf.attribute4 section
				                FROM fnd_user usr LEFT JOIN per_all_people_f ppf
				                       ON usr.employee_id = ppf.person_id
				                 WHERE usr.user_name = ?
				                       AND usr.end_date IS NULL
				                       AND IPC_DECRYPT_ORA_USR_PWD(usr.encrypted_user_password) = ?
				            UNION
				            SELECT usr.user_id,
				                         usr.user_name,
				                         usr.first_name,
				                         usr.middle_name,
				                         usr.last_name,
				                         null full_name,
				                         null division,
				                         null department,
				                         null section
				            FROM IPC.IPC_FSD_USERS usr
				            WHERE usr.end_date_active IS NULL
				                         and usr.user_name = ?
				                         and usr.user_password = ?
				)";
		$params = array($username,$password,$username,$password);
		$query = $this->oracle->query($sql,$params);
		return $query->result();
	}
}
