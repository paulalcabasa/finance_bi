<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$route = $this->router->directory . $this->router->fetch_class();

        // echo $route;

        // Ignore any controllers not to be effected 
       /* $ignore = array(
            'dirname/controllername',
        );
        */
        // If the user has not logged in will redirect back to login
        //&& !in_array($route, $ignore)
        if (!$this->session->userdata('fnbi_user_name') ) {
            $this->session->unset_userdata('fnbi_user_name');
            redirect($this->config->item('base_url') . 'login');
        }
    }
}