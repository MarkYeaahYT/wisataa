<?php
class Mysystem extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("mysystem_model");
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

    public function detail()
    {
        # code...
        $this->load->view("detail");
    }
}
?>