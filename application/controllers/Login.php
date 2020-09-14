<?php 

// public = bisa di akses semua
// private = hanya boleh di panggil di dalam dmn dia berada

class Login extends CI_Controller{
    function index(){	
		$this->load->view('login');
	}
	function login_proses(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$result = $this->Wisata_m->do_login($username, $pass);

		if($result->num_rows() > 0){
			$data = $result->row();
			$sessionData =[
				'username'=>$data->username,
				'nama_admin'=>$data->nama
			];

			$this->session->set_userdata($sessionData);

			// klo login berhasil mau di arahkan kmn?
			redirect('Wisata/index');
		}else{
			echo "Login gagal. Try again. <a href='".site_url('Login/index')."'>Click</a>";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect("Login/index");
	}
}
?>