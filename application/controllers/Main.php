<?php
class Main extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
    }

    public function index()
    {
        # code...
        $this->load->view("main");
    }
}

?>