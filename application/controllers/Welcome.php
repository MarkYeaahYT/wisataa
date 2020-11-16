<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('welcome_m');
		$this->load->helper('cookie');
		
		
	}

	public function index()
	{
		$data['wilayah']=$this->welcome_m->wilayah();
		$this->load->view("tampilan/packages", $data);
	}

	public function wilayah($id_wilayah)
	{
		$data['wilayah']=$this->welcome_m->wilayah();
		$data['select_wilayah']=$this->welcome_m->select_wilayah($id_wilayah);
		$this->load->view("tampilan/wilayah", $data);
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

	public function select_id_wilayah()
	{
		echo json_encode($this->welcome_m->select_id_wilayah());
	}
	
}
