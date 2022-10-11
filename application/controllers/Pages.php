<?php
class pages extends CI_Controller
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
        $this->load->view('pages/home', $data);
        $this->load->view('template/footer');
    }
    public function product()
    {

        $data = [
            'title' => 'Product',
            'product' => $this->Product_model->getAllProduct(),
            //mengambil data user dari session di controllers auth
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
            // mengambil data dari db $data ['nama tabel']['field'];

        ];
        $this->load->view('template/header', $data);
        $this->load->view('pages/product', $data);
        $this->load->view('template/footer');
    }
    public function gallery()
    {
        $data = [
            'title' => 'Gallery',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        $this->load->view('template/header', $data);
        $this->load->view('pages/gallery');
        $this->load->view('template/footer');
    }
    public function aboutus()
    {
        $data = [
            'title' => 'About us',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('template/header', $data);
        $this->load->view('pages/aboutus');
        $this->load->view('template/footer');
    }
    public function contactus()
    {
        $data = [
            'title' => 'Contact us',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        $this->load->view('template/header', $data);
        $this->load->view('pages/contactus');
        $this->load->view('template/footer');
    }
    public function addchart($id)
    {
        $barang = $this->Product_model->find($id);
        $data = [
            'barang' => [
                'id' => $barang->id,
                'qty' => 1,
                'price' => $barang->harga,
                'name' => $barang->nama_barang,
            ]
        ];
        $this->cart->insert($data);
        redirect('pages/product');
    }
    public function detail_keranjang()
    {
        $data = [
            'title' => 'Detail keranjang',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()

        ];
        $this->load->view('template/header', $data);
        $this->load->view('keranjang');
        $this->load->view('template/footer');
    }
}
