<?php
    class Mahasiswa_model extends CI_model
    {
        public function getAllMahasiswa()
        {
            return $this->db->get('mahasiswa')->result_array();
        }

        public function tambahDataMHS()
        {
            $data = array(
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true)
            );

            $this->db->insert('mahasiswa', $data);
        }

        public function hapusDataMHS($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');
        }

        public function getMahasiswaById($id)
        {
            return $this->db->get_where('mahasiswa', ['id' => $id ])->row_array();
        }

        public function editDataMHS()
        {
            $data = array(
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true)
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }

        public function cariDataMHS()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('nim', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswa')->result_array();
        }
    }