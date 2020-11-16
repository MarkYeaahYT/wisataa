<?php
class Welcome_m extends CI_Model{

    public function showdata_xhr()
    {

        $query = $this->db->get("destinations")->result();
        $result = array();
        for ($i=0; $i < count($query); $i++) {
            $this->db->where("id_destination", $query[$i]->id_destination);
            $visitor = $this->db->get("visitor")->num_rows();

            $this->db->where("id_destination", $query[$i]->id_destination);
            $com = $this->db->get("comentar")->num_rows();
            $res = array(
                "id_destination" => $query[$i]->id_destination,
                "id_wilayah" => $query[$i]->id_wilayah,
                "nama_dest" => $query[$i]->nama_dest,
                "urlgmaps" => $query[$i]->urlgmaps,
                "image" => $query[$i]->image,
                "artikel" => $query[$i]->artikel,
                "visitor" => $visitor,
                "comentar" => $com,
            );
            array_push($result, $res);
        }
        // return $this->db->get("destinations")->result();
        return $result;
    }

    public function cari_xhr()
    {
        $cari = $this->input->post("cari", true);
        $this->db->select("*");
        $this->db->from("destinations");
        $this->db->join("wilayah", "destinations.id_wilayah = wilayah.id_wilayah");
        $this->db->where("nama_dest like '%$cari%' OR wilayah like '%$cari%'");
        return $this->db->get()->result();
        // $two = $this->db->query("select * from destinations where nama_dest like '%$cari%'")->result();
    }

    public function detail_xhr()
    {
        $id = $this->input->get("id", true);
        $this->db->where("id_destination", $id);
        $dest = $this->db->get("destinations")->result();
        $this->db->where("id_destination", $id);
        $visitor = $this->db->get("visitor")->num_rows();
        $this->db->where("id_destination", $id);
        $com = $this->db->get("comentar")->num_rows();
        return $dest + array(
            "visitor" => $visitor,
            "comentar" => $com,
        );
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

    public function genid_vivitor()
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
            $this->db->where("id_visitor", $result);;
            $query = $this->db->get("visitor")->num_rows();
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
      
        
        $dest = $this->input->post("dest");
        $cok = get_cookie($dest);
        if($cok != $dest){
            $cookie = array(
                'name'   => "$dest",
                'value'  => "$dest",                            
                'expire' => "45000",                                                                                   
                );
            set_cookie($cookie);

            $this->db->set("id_visitor", $this->genid_vivitor());
            $this->db->set("id_destination", $dest);
            return $this->db->insert("visitor");
        }else{
            return array("wasvisited", "yeah");
        }
    }

    public function wilayah()
    {
        return $this->db->query("SELECT * FROM wilayah" )->result();
    }

    public function select_wilayah($id_wilayah)
    {
        return $this->db->query("SELECT * FROM destinations INNER JOIN wilayah ON destinations.id_wilayah=wilayah.id_wilayah WHERE wilayah.id_wilayah ='$id_wilayah' ")->result();
    }

    public function select_id_wilayah()
    {
        $id = $this->input->get("id", true);
        $this->db->where("id_wilayah", $id);
        return $this->db->get("destinations")->result();
    }

}

?>