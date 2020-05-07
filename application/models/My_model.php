<?php

class My_model extends CI_Model{


    public function register()
    {
        # code...
    }

    public function logout()
    {
        # code...
    }

    public function detail()
    {
        # code...
    }

    public function generate_id()
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

    public function show_data()
    {
        return $this->db->get("destinations")->result();
    }

}
?>