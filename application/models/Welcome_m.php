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
}

?>