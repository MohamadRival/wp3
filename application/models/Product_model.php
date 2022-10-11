<?php

class Product_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product')->result_array();
    }
    public function tambahDataProduct()
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true), //true berfungsi agar tidak ke hack
            "merk" => $this->input->post('merk'),
            "sampul" => $this->input->post('sampul'),
            "berat" => $this->input->post('berat'),
            "harga" => $this->input->post('harga'),
            "stok" => $this->input->post('stok'),
        ];
        $this->db->insert('product', $data); // tabel mahasiswa
    }
    public function hapusDataProduct($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('product', ['id' => $id]);
    }
    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('product');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function ubahDataProduct()
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true), //true berfungsi agar tidak ke hack
            "merk" => $this->input->post('merk'),
            "sampul" => $this->input->post('sampul'),
            "berat" => $this->input->post('berat'),
            "harga" => $this->input->post('harga'),
            "stok" => $this->input->post('stok'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('product', $data); // tabel mahasiswa
    }
    public function getProductById($id)
    {
        return $this->db->get_where('product', ['id' => $id])->row_array();
        // ambil data dari tabel mahasiswa berdasarkan id, lalu tampilkan 1 baris/data berbentuk array
    }
}
