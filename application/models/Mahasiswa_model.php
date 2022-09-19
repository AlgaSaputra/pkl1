<?php 

class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();  //mahasiswa merupakan nama table di database saya
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "name" => $this->input->post('name', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($nim)
    {
        $this->db->delete('mahasiswa', ['nim' => $nim]);
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
        
    }

    public function editDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "name" => $this->input->post('name', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
        ];
        $this->db->where('nim', $this->input->post('nim'));
        $this->db->update('mahasiswa', $data);
    }
}


?>