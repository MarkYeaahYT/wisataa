<?php
class Welcome_m extends CI_Model{

    public function showdata_xhr()
    {
        return $this->db->get("destinations")->result();
    }

    public function cari_xhr()
    {
        $cari = $this->input->post("cari", true);
        return $this->db->query("select * from destinations where nama_dest like '%$cari%'")->result();
    }

    public function detail_xhr()
    {
        $id = $this->input->get("id", true);
        $this->db->where("id_destination", $id);
        return $this->db->get("destinations")->result();
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

    public function comentar()
    {
        $coment = $this->input->post("comment",true);
        $nama = $this->input->post("nama",true);
        $destination = $this->input->post("id", true);
        $date = $this->input->post("date", true);

        $this->db->set("id_comentar", $this->genid());
        $this->db->set("comentar", $coment);
        $this->db->set("nama", $nama);
        $this->db->set("date", $date);
        $this->db->set("id_destination", $destination);

        return $this->db->insert("comentar");
    }

    public function showcomentar_xhr()
    {
        $id = $this->input->get("id", true);
        $this->db->where("id_destination", $id);
        return $this->db->get("comentar")->result();
    }

    public function addvisitors()
    {
        
    }
    function wilayah(){
        return $this->db->query("SELECT * FROM wilayah")->result();
    }

}

?>