<?php

class Role_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        
        $this->load->model('company_model');
        $site_info = array();
        $basic_configuration_info_array = $this->company_model->get_basic_configuration_info()->result_array();
        if(!empty($basic_configuration_info_array)){
            $site_info =  $basic_configuration_info_array[0];
        }
        $this->data['site_info'] = $site_info;       
    }
}
