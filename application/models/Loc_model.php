<?php

class Loc_Model extends CI_Model
{
    public function getloc()
    {
        return $this->db->get('lokasi')->result_array();
    }

    public function tambahDatalokasi()
    {
        $data = [

            "nama" => $this->input->post('nama', true),
            "lat" => $this->input->post('lat', true),
            "long" => $this->input->post('long', true),


        ];

        $this->db->insert('lokasi', $data);
    }

    public function hapusDatalokasi($id)
    {
        $this->db->where('id_lok', $id);
        $this->db->delete('lokasi');
    }

    public function getlokasiById($id)
    {
        return $this->db->get_where('lokasi', ['id_lok' => $id])->row_array();
    }


    public function ubahlokasi()
    {
        $data = [
            "id_lok" => $this->input->post('id_lok', true),
            "nama" => $this->input->post('nama', true),
            "lat" => $this->input->post('lat', true),
            "long" => $this->input->post('long', true),

        ];
        $this->db->where('id_lok', $this->input->post('id_lok'));
        $this->db->update('lokasi', $data);
    }

    public function cariDatalokasi()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('lokasi')->result_array();
    }
}
