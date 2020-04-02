<?php
class Admin extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("admin_model");
    }

    public function add()
    {
        # code...
        echo json_encode($this->admin_model->add_data());

    }
    
    public function delete()
    {
        # code...
        echo json_encode($this->admin_model->delete_data());
        
    }
    
    public function edit()
    {
        # code...
        echo json_encode($this->admin_model->edit_data());
        
    }

}
?>