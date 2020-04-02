<?php
class User extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("user_model");
    }

    public function set_rating()
    {
        # code...
        echo json_encode($this->user_model->set_rating());
    }
    
    public function comentar()
    {
        # code...
        echo json_encode($this->user_model->comentar());
    }
    
    public function search()
    {
        # code...
        echo json_encode($this->user_model->search());
    }
}
?>