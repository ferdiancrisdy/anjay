<?php 
    class M_data extends CI_Model{
        function tampil_data(){
            $this->db->select("a.*, b.nama_pegawai");
            $this->db->from("peminjaman AS a");
            $this->db->join("pegawai AS b", "a.id_pegawai = b.id_pegawai");
        
            return $this->db->get();
        }
        
        function tampil_pegawai(){
            return $this->db->get('pegawai');
        }

        function input_data($data,$table){
            $this->db->insert($table,$data);
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
        }
        function lihat_data($id){		
            $this->db->select("a.*, b.nama_pegawai");
            $this->db->from("peminjaman AS a");
            $this->db->join("pegawai AS b", "a.id_pegawai = b.id_pegawai");

            $this->db->where('a.id_peminjaman', $id);
        
            return $this->db->get();
        }
        function update_data($id_peminjaman, $tanggal_peminjaman, $tanggal_kembali, $status_peminjaman, $id_pegawai){
            $data = array(
                'tanggal_peminjaman' => $tanggal_peminjaman,
                'tanggal_kembali' => $tanggal_kembali,
                'status_peminjaman' => $status_peminjaman,
                'id_pegawai' => $id_pegawai
            );

            $this->db->where('id_peminjaman', $id_peminjaman);
		    $this->db->update('peminjaman', $data);
        }
    }
?>