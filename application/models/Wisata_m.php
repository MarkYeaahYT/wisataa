<?php 

/**
 * 
 */
class Wisata_m extends CI_Model
{
	function index(){
		return $this->db->query("SELECT * FROM destinations")->result();
	}


	// input data
	function input(){
		return $this->db->query("SELECT * FROM destinations")->result();	
	}
	// proses
	function insert_db($data){
		$this->db->insert('destinations', $data);
	}

	// SELECT
	function select_by_db($id_destinations){
		return $this->db->query("SELECT * FROM destinations WHERE id_destination ='$id_destinations' ")->result();
	}

	// edit
	function edit_db($id_destinations, $data){
		$this->db->where('id_destination', $id_destinations);
		$this->db->update('destinations', $data);
	}

	// delete data
	function delete_db($id_destinations){
		$this->db->where('id_destination', $id_destinations);
		$this->db->delete('destinations');
	}

	// login
	function do_login($username, $pass){
		return $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$pass' ");
	}

	//comentar
	function comentar(){
		return $this->db->query("SELECT * FROM comentar  INNER JOIN destinations ON comentar.id_destination=destinations.id_destination")->result  ();
	}
}

?>