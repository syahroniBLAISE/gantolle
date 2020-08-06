<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->db->get('artikelgantolle')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/indexArtikel', $data);
        $this->load->view('templates/footer');
    }


    public function lihatArtikel($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->db->get_where('artikelgantolle', ['id' => $id])->row_array();
        $judul = $data['artikel']['judul'];
        $data['title'] = 'Artikel '. $judul;

        // $data['artikel'] = $this->db->get('artikelgantolle')->result_array();
        $data['id'] = $id;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/artikelView', $data);
        $this->load->view('templates/footer');
    }
 
    public function tambahArtikel()
    {
       

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $data['title'] = 'Menu Edit Artikel';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/tambahArtikel', $data);
        $this->load->view('templates/footer');
    }
    public function menuArtikel()
    {
        $this->load->view('artikel/menu artikel');
    }

    public function inputArtikel($ket='',$id='')
    {
        $data = [
            'judul' => $_POST['judul'],
            'artikel' => $_POST['artikel'],
            'tgl_post' => $_POST['tgl_post']
        ];


        if($ket == 'tambah')
        {

            $this->db->insert('artikelgantolle', $data);
            redirect('Menu/artikel');
        
        }
        

        if ($ket == 'edit') {

            $this->db->where('id', $id);
            $this->db->update('artikelgantolle', $data);
            // var_dump($data);
            redirect('Menu/artikel');
          
        }

    }

    

    public function editArtikel($id='')
    {
        $data['artikel'] = $this->db->get_where('artikelgantolle', ['id' => $id])->row_array();
        // var_dump($data['artikel']);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $data['title'] = 'Menu Edit Artikel';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/editArtikel', $data);
        $this->load->view('templates/footer');

    }

    public function delete($id='')
    {
        $data = ['id' => $id];
        $this->db->delete('artikelgantolle', $data);
        // var_dump($id);
        redirect('menu/Artikel');
    }


}
