<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {	

	function __construct(){
		parent::__construct();		
		$this->load->model('Userlog'); 
		$this->load->model('KaryawanModel');
	}

	function welcome_page_keuangan()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
            $data = array(			
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/welcome_page_pemilik', $data);
		}	
	}
	function kelolaKaryawan(){
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$daftarkaryawan = $this->KaryawanModel->getDataKaryawan();
			$data = array(			
				'karyawan' => $daftarkaryawan,
				'nama'=> $this->session->userdata('nama'),
				);
			$this->load->view('Pemilik/karyawan', $data);
		}
	}
}
