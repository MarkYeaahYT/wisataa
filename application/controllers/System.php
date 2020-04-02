<?php
class System extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("system_model");
    }

    public function login()
    {
        # code...
        echo json_encode($this->system_model->login());
    }

    public function register()
    {
        # code...
        echo json_encode($this->system_model->register());
    }
    
    public function logout()
    {
        # code...
        echo json_encode($this->system_model->logout());
    }
}
?>