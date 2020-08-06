<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	public function __construct()
		{
	    parent::__construct();
	    // is_logged_in();
		}

	public function data_peserta()
    	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->model('Menu_model', 'menu');
        // $data['subMenu'] = $this->menu->getSubMenu();
        // $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $data['title'] = 'Pendaftaran Gantolle';
        $data['d'] = $this->db->get('datapilot')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendaftaran/data_peserta', $data);
        $this->load->view('templates/footer');
    	}
    public function printPendaftaran()
    	{
	    	$data['title'] = 'Pendaftaran Hard Copy';
	        
	        $this->load->view('pendaftaran/copSurat', $data);
	        $this->load->view('pendaftaran/report_peserta2', $data);	
	    }

    public function	show_data_peserta()
	    {
	    	$data['title'] = 'Daftar Peserta Kejurnas';
	        $data['d'] = $this->db->get('datapilot')->result_array();
	    	
        	
	        $this->load->view('pendaftaran/show_data_peserta', $data);	
	    }
	public function report_peserta($id='')
	    {
	        $data['title'] = 'Halaman Validasi';
	        $data['d'] = $this->db->get_where('datapilot', ['id' => $id])->row_array();
	        $this->load->view('pendaftaran/copSurat', $data);
	        $this->load->view('pendaftaran/report_peserta', $data);
	    }

	public function printAll($id='')
	    {
	        $data['title'] = 'Daftar Pilot';
        	$data['d'] = $this->db->get('datapilot')->result_array();
        	$this->load->view('pendaftaran/copSurat', $data);
	        $this->load->view('pendaftaran/printAll', $data);
	    }

	public function report_pendaftaran()
		{
		    $data['title'] = 'Hasil Proses Pendaftaran';
	        $this->load->view('pendaftaran/report_pendaftaran', $data);

		}

	public function input($ket='',$id='')
		{
			if ($ket =='tambah') {

				$fileFoto = ['nama' 	=> $_FILES['foto']['name'],
					'ukuran' 	=> $_FILES['foto']['size'],
					'tmp' 		=> $_FILES['foto']['tmp_name'],
					'namaOrang' => $this->input->post('nama'),
					'jenisFile' => 'FOTO'
					];
				$fileKTP = ['nama' 	=> $_FILES['ktp']['name'],
						'ukuran' 	=> $_FILES['ktp']['size'],
						'tmp' 		=> $_FILES['ktp']['tmp_name'],
						'namaOrang' => $this->input->post('nama'),
						'jenisFile' => 'KTP'
				];
				$this->load->model('proses', 'proses');
		        $namaFoto = $this->proses->prosesGambar($fileFoto);
		        $namaKTP = $this->proses->prosesGambar($fileKTP);
				
			}

			if ($ket == 'edit') {
				$namaFoto 	= $this->input->post('FOTO');
		        $namaKTP 	= $this->input->post('KTP');
			}

	        $day = $this->input->post('DOBDay');
	        $bln = $this->input->post('DOBMonth');
	        $thn = $this->input->post('DOBYear');
	        $tanggal_lahir = $day .'/'. $bln.'/'. $thn ;
	        
	        $namaPeserta 	= htmlspecialchars($this->input->post('nama'));
	        $idPilot 		= htmlspecialchars($this->input->post('fai_no'));
	        $data = [
			// 'id',
	        'nama' 			=> $namaPeserta,
			'category' 		=> htmlspecialchars($this->input->post('category')),
			'last_name' 	=> htmlspecialchars($this->input->post('last_name')),
			'hari' 			=> $tanggal_lahir,
			'gender' 		=> $this->input->post('gender'),
			'tanggal_pendaftaran' 		=> $this->input->post('tanggal_pendaftaran'),
			'fai_no' 		=> $idPilot,
			'pilot_rating' 	=> $this->input->post('pilot_rating'),
			'address1' 		=> htmlspecialchars($this->input->post('address1')),
			'team'			=> htmlspecialchars($this->input->post('team')), 
			'city' 			=> htmlspecialchars($this->input->post('city')),
			'postcode' 		=> htmlspecialchars($this->input->post('postcode')),
			'country'	 	=> htmlspecialchars($this->input->post('country')),
			'phone' 		=> htmlspecialchars($this->input->post('phone')),
			'email' 		=> htmlspecialchars($this->input->post('email')),
			'nok_zip' 		=> $this->input->post('nok_zip'),
			'nok_name' 		=> htmlspecialchars($this->input->post('nok_name')),
			'nok_relationship' => htmlspecialchars($this->input->post('nok_relationship')),
			'nok_phone' 	=> htmlspecialchars($this->input->post('nok_phone')),
			'glider_make' 	=> htmlspecialchars($this->input->post('glider_make')),
			'glider_model' 	=> htmlspecialchars($this->input->post('glider_model')),
			'glider_color' 	=> htmlspecialchars($this->input->post('glider_color')),
			'harnes' 		=> htmlspecialchars($this->input->post('harnes')),
			'parasut' 		=> htmlspecialchars($this->input->post('parasut')),
			'parasutEmergensi' => htmlspecialchars($this->input->post('parasutEmergensi')),
			'herky' 		=> $this->input->post('herky'),
			'trip_type' 	=> $this->input->post('trip_type'),
			'embarkasi' 	=> htmlspecialchars($this->input->post('embarkasi')),
			'other' 		=> htmlspecialchars($this->input->post('other')),
			'gbr_foto' 		=> $namaFoto,
			'gbr_KTP' 		=> $namaKTP
	            ];


	        if($ket == 'tambah')
	        {

	        	$this->db->insert('datapilot', $data);
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat!.. anda telah berhasil mendaftar kejurnas seri 1 KTM  </div>');
				redirect('auth');
				
			}else{

		        if ($ket == 'edit') {
		            $this->db->where('id', $id);
		            $this->db->update('datapilot', $data);
					redirect('Pendaftaran/data_peserta');
				}
	        	
	        }

		}
		

		public function print($id)
		{
	        $this->db->delete('datapilot', $id);
			// var_dump($id);
			redirect('pendaftaran/report_peserta/'.$id);

		}

		public function edit($id='')
		{
	        $data['edit'] = $this->db->get_where('datapilot', ['id' => $id])->row_array();
			$data['tanggal'] = (explode('/', $data['edit']['hari']));

	        $data['bulan'] = ['January',
	                    'Febuary',
	                    'March',
	                    'April',
	                    'May',
	                    'June',
	                    'July',
	                    'August',
	                    'September',
	                    'October',
	                    'November',
	                    'December'];
	        
	        $data['title'] = 'Edit Pendaftaran Gantolle';
	        // $data['d'] = $this->db->get('datapilot')->result_array();
	        $this->load->view('templates/header', $data);
	        $this->load->view('templates/sidebar', $data);
	        // $this->load->view('templates/topbar', $data);
	        $this->load->view('pendaftaran/edit_data_pilot', $data);
	        $this->load->view('templates/footer');

		}

		public function delet($id)
		{	
			$data = [
	            'id' => $id
	            
	        ];
	        $this->db->delete('datapilot', $data);
	        var_dump($id);
			redirect('pendaftaran/data_pilot');

		}

		public function fileGambar($id)
		{
	        $data['d'] = $this->db->get_where('datapilot', ['id' => $id])->row_array();

			$data['title'] = 'Edit Pendaftaran Gantolle';
	        
	        $this->load->view('pendaftaran/copSurat', $data);
	        
	        $this->load->view('pendaftaran/fileGambar', $data);
	        $this->load->view('templates/footer');
		}

		public function data_pilot()
		{
	        $data['title'] = 'Halaman Validasi';
	        $data['d'] = $this->db->get('datapilot')->result_array();
	        redirect('Menu/data_pendaftar');
		}




		public function download($download='')
		{
			if (isset($download)) 
			{
	        // $filename    = $download;

	        $back_dir    =  base_url('assets/pdf/');
	        $file = $back_dir.$download.'.pdf';
	        redirect('assets/pdf/undangan.pdf');
	        redirect('auth');
	    
	        }
		}
		public function downloadGambar($file='')
		{

	        // Tentukan folder file yang boleh di download
			$folder = base_url('vendor/sbadmin2/img/gambar/');
			// Lalu cek menggunakan fungsi file_exist
			if (!file_exists($folder.$file)) {
			  echo "<h1>Access forbidden!</h1>
			      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
			      echo $folder.$file;
			  exit;
			}

			// Apabila mendownload file di folder files
			else {
			  header("Content-Type: octet/stream");
			  header("Content-Disposition: attachment; 
			  filename=\"".$_GET['file']."\"");
			  $fp = fopen($folder.$_GET['file'], "r");
			  $data = fread($fp, filesize($folder.$_GET['file']));
			  fclose($fp);
			  print $data;
			}
		}



}