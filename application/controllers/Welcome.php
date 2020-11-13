<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('welcome_m');
		
		
	}

	public function index()
	{
		$this->load->view("tampilan/packages");
	}
	
	public function showdata_xhr()
	{
	 	echo json_encode($this->welcome_m->showdata_xhr());
	}
	
	public function cari_xhr()
	{
		echo json_encode($this->welcome_m->cari_xhr());
	}
	
	public function detail()
	{
		$this->load->view("tampilan/detail");
		
	}
	
	public function detail_xhr()
	{
		echo json_encode($this->welcome_m->detail_xhr());
	}

	public function comentar()
	{
		echo json_encode($this->welcome_m->comentar());
	}

	public function showcomentar_xhr()
	{
		echo json_encode($this->welcome_m->showcomentar_xhr());
	}

	public function addvisitors()
	{
		echo json_encode($this->welcome_m->addvisitors());
	}


	
}
