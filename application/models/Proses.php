<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Model
{
    public function prosesGambar($File)
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
        
        $ukuran 	= $File['ukuran'];
        $tmp 	  	= $File['tmp'];
        $nama 		= $File['nama'];
		$namaOrang 	= $File['namaOrang'];
		$jenisFile 	= $File['jenisFile'];

		$namaFile = explode('.', $nama);

		$ekstensiFile = strtolower(end($namaFile));

		$namaFileFoto  = $namaOrang.'_'.$jenisFile.'.'.$ekstensiFile ;	
		

		if($ukuran < 100440700000)
		{	
			$upload = move_uploaded_file($tmp, 'vendor/sbadmin2/img/gambar/'.$namaFileFoto);
			if($upload){		
			return $namaFileFoto;
			} else {
				echo 'file gagal upload';
			}
		} 
		else {
			echo 'file terlalu besar';
		}
    }
    
}
// ../../vendor/sbadmin2/img/