<?php

class System_model extends CI_Model {
	
	private $oracle = NULL;
	
	public function __construct(){
		
		parent::__construct();
		$this->oracle = $this->load->database('oracle', true);
	}

	public function get_all_systems(){

		$sql = "SELECT  SYSTEM_ID,
					    SYSTEM_NAME,
					    DESCRIPTION,
					    LINK,
					    LINK_DESCRIPTION,
					    HTML_PANE_BG_COLOR,
					    HTML_PANE_ICON,
					    DISPLAY_SEQUENCE
				FROM IPC.IPC_FSD_SYSTEMS
				ORDER BY DISPLAY_SEQUENCE ASC";
	
		$query = $this->oracle->query($sql);
		return $query->result();
	}

	public function get_system_acess($user_id){
		$sql = "SELECT fsa.access_id,
				           fsa.system_id,
				           fs.system_name,
				           fsa.user_type_id,
				           fut.name user_type_name,
				           fut.user_level
				FROM IPC.IPC_FSD_SYSTEM_ACCESS fsa 
				        INNER JOIN IPC.IPC_FSD_SYSTEMS fs
				            ON fsa.system_id = fs.system_id
				         INNER JOIN IPC.IPC_FSD_USER_TYPES fut
				            ON fut.user_type_id = fsa.user_type_id
				WHERE 1 = 1
				           AND fsa.end_date_active IS NULL
				           AND fsa.user_id = ?";
		$query = $this->oracle->query($sql,$user_id);
		return $query->result();
	}
}
