<?php
class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');  //memanggil validasi
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'product' => $this->Product_model->getAllProduct(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Data',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        // set_rules('name pada form label', 'alias untuk di tampilkan di pesan error', 'rulesnya ')
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('sampul', 'Sampul', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|integer');
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer');
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->Product_model->tambahDataProduct(); //methode nya ada di model
            $this->session->set_flashdata('tambah', 'ditambah'); // membuat flash data, tambah adalah parameter flashdata untuk di view
            // ditambah adalah pesan nya
            redirect('admin'); //untuk mengembalikan ke halaman setelah di save
        }
    }
    public function hapus($id)
    {
        $this->Product_model->hapusDataProduct($id);
        $this->session->set_flashdata('tambah', 'dihapus');
        redirect('admin');
    }
    public function ubah($id)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'product' => $this->Product_model->getProductById($id),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        // set_rules('name pada form label', 'alias untuk di tampilkan di pesan error', 'rulesnya ')
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('sampul', 'Sampul', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|integer');
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer');
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->Product_model->UbahDataProduct(); //methode nya ada di model
            $this->session->set_flashdata('tambah', 'diubah'); // membuat flash data, tambah adalah parameter flashdata untuk di view
            // ditambah adalah pesan nya
            redirect('admin'); //untuk mengembalikan ke halaman setelah di save
        }
    }
}
