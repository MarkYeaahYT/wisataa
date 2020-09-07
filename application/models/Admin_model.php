<?php

class Admin_model extends CI_Model{

    public function add_data()
    {
        $destination = $this->input->post("destination");
        $url = $this->input->post("urlgmaps");
        $artikel = $this->input->post("artikel");
        $img = $this->upload();

        $this->db->set("id_destination", $this->genid());
        $this->db->set("nama_dest", $destination);
        $this->db->set("urlgmaps", $url);
        $this->db->set("artikel", $artikel);

        $this->db->set("image", $img);

        return $this->db->insert("destinations");
    }
    
    public function delete_data()
    {
        # code...
        $id = $this->input->post("id");
        $this->db->where("id_destination", $id);
        return $this->db->delete("destinations");
    }
    
    public function edit_data()
    {
        $edtphoto = $this->input->post("pedit");
        $dest = $this->input->post("destination");
        $url = $this->input->post("urlgmaps");
        $artikel = $this->input->post("artikel");
        $id = $this->input->post("id");


        if($edtphoto != "false"){
            $img = $this->upload();
            $this->db->set("nama_dest", $dest);
            $this->db->set("urlgmaps", $url);
            $this->db->set("artikel", $artikel);
            $this->db->set("image", $img);
            $this->db->where("id_destination", $id);
            return $this->db->update("destinations");
        }else{
            $this->db->set("nama_dest", $dest);
            $this->db->set("urlgmaps", $url);
            $this->db->set("artikel", $artikel);
            $this->db->where("id_destination", $id);
            return $this->db->update("destinations");
        }
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

    public function upload()
    {
        # code..
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 0; // 0 is not set

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file')){
            $data = array('error' => $this->upload->display_errors());
            return $data;
        }else{
            $data = $this->upload->data();
            chmod($data['full_path'], "775");
            return $data['file_name'];
        }

    }


}
?>