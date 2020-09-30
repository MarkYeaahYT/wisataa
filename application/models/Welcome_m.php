<?php
class Welcome_m extends CI_Model{

    public function showdata_xhr()
    {
        return $this->db->get("destinations")->result();
    }
}

?>