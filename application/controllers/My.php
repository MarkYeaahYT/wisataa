<?php
class My extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("my_model");
    }

    public function register()
    {
        # code...
        echo json_encode($this->my_model->register());
    }
    
    public function logout()
    {
        # code...
        echo json_encode($this->my_model->logout());
    }

    public function detail()
    {
        # code...
        $this->load->view("detail");
    }
    
    public function show_data()
    {
        # code...
        echo json_encode($this->my_model->show_data());
    }

    public function detail_xhr()
    {
        # code...
        echo json_encode($this->my_model->detail());
    }
}
?>