<?php 

/**
 * 
 */
class Wisata extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect("Login/index");
		}
	}
	
	function index(){
		$data['index']=$this->Wisata_m->index();	
		$this->load->view('wisata_v', $data);
	}
	

	// input data
	function form(){
		$data['destination']=$this->Wisata_m->input();
		$this->load->view('wisata_input', $data);
	}

	public function genid()
    {
        $lenght = 4;
        $character = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $characterLenght = strlen($character);
        $generate = true;
        while ($generate) {
            $result = "";
            for ($i=0; $i < $lenght; $i++) { 
                $result .= $character[rand(0, $characterLenght -1 )];
            }
            $this->db->where("id_destination", $result);;
            $query = $this->db->get("destinations")->num_rows();
            if ($query == 0){
                $generate = false;
            }
        }
        return $result;
	}
	
	function insert(){
		$nm_file = time().'.png';
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config ['file_name'] = $nm_file;
		$config['overwrite'] = TRUE;
		$this->upload->initialize($config);
		if ($this->upload->do_upload('foto')){
			$foto = $this->upload->data();
			$data = array(
				'id_destination' => $this->genid(),
				'nama_dest' => $this->input->post('destinasi'),
				'urlgmaps' => $this->input->post('url'),
				'image' => $foto['file_name'],
				'artikel' => $this->input->post('artikel'));
			$this->Wisata_m->insert_db($data);
		}else{
			$error = array('error' =>$this->upload->display_errors());
			echo json_encode($error);
		}
		redirect('Wisata');
	}

	function select_by($id_destinasi){

		$data['Wisata']=$this->Wisata_m->select_by_db($id_destinasi);
		$this->load->view('wisata_edit', $data);
	}

	// edit data
	function edit(){
		$id_destinasi=$this->input->post('id_destinasi');

		$nm_file = $this->input->post('nm_foto');
		$config['upload_path']= './assets/upload/';
		$config['allowed_types']='jpg|jpeg|png';
		$config['file_name']=$nm_file;
		$config['overwrite']= TRUE;
		$this->upload->initialize($config);
		if($this->upload->do_upload('foto')){
			$foto = $this->upload->data();
			$data = array(
				'nama_dest' => $this->input->post('destinasi'),
				'urlgmaps' => $this->input->post('url'),
				'image' => $foto['file_name'],
				'artikel' => $this->input->post('artikel'));

		}else{
			$data = array(
				'nama_dest' => $this->input->post('destinasi'),
				'urlgmaps' => $this->input->post('url'),
				'artikel' => $this->input->post('artikel'));
			echo $this->upload->display_errors();
		}

		$this->Wisata_m->edit_db($id_destinasi, $data);

		redirect('Wisata');
		
	}

	// delete data
	function delete($id_destinasi){
		$data = $this->Wisata_m->select_by_db($id_destinasi);
		// print_r($data);
		foreach ($data as $key => $value) {
			unlink('./assets/upload/'. $value->foto);
		}
		$this->Wisata_m->delete_db($id_destinasi);
		redirect('Wisata');
	}

<<<<<<< HEAD
	//comentar
	function comentar(){
		$data['comentar']=$this->Wisata_m->comentar();	
		$this->load->view('wisata_comen', $data);
	}
	


=======
	

>>>>>>> 0ae65c2cf60b8df75db862d4653129bd5538c0d5
}

?>