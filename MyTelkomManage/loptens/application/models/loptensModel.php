<?php 

class LoptensModel extends CI_Model{
    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }
    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function insert_batch($table = null, $data = array()){
        $jumlah = count($data);
        if($jumlah > 0){
            $this->db->insert_batch($table, $data);
        }
    }
    public function insertLop($data) {
        $this->db->insert('lop', $data);
        return $this->db->insert_id();
    }

    public function insertDetail($data) {
        $this->db->insert('detail', $data);
    }
    public function getLopData() {
        $this->db->select('lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status, user.nama_user, user.rule');
        $this->db->from('lop');
        $this->db->join('user', 'lop.id_user = user.id_user');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDetailLopData($id) {
        $this->db->select('detail.id_detail, lop.id_lop, lop.id_user, lop.judul, lop.nama_pelanggan, lop.status, user.nama_user, user.rule, detail.langganan, detail.alamat, detail.tipe, detail.harga, detail.kategori, detail.status as detail_status, detail.nomor_order');
        $this->db->from('detail');
        $this->db->join('lop', 'detail.id_lop = lop.id_lop');
        $this->db->join('user', 'lop.id_user = user.id_user');
        $this->db->where('lop.id_lop', $id); // Ubah 'detail.id_lop' menjadi 'lop.id_lop'
        $query = $this->db->get();
        return $query->result();
    }
    
    public function deleteDataWithDetail($id_lop) {
        // Mulai transaksi database
        $this->db->trans_start();

        // Menghapus data dari tabel "detail"
        $whereDetail = array('id_lop' => $id_lop);
        $this->db->where($whereDetail);
        $this->db->delete('detail');

        // Menghapus data dari tabel "lop"
        $whereLop = array('id_lop' => $id_lop);
        $this->db->where($whereLop);
        $this->db->delete('lop');

        // Selesai transaksi database
        $this->db->trans_complete();

        // Periksa apakah transaksi berhasil
        if ($this->db->trans_status() === FALSE) {
            // Terjadi kesalahan, lakukan tindakan yang sesuai
            // ...

            return false;
        } else {
            // Transaksi berhasil, lakukan tindakan yang sesuai
            // ...

            return true;
        }
    }


}

?>