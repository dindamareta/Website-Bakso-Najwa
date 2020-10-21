<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {	

	function __construct(){
		parent::__construct();		
		$this->load->model('Userlog'); 
		$this->load->model('KaryawanModel');
 
	}

	public function index()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
			$berita = $this->BeritaModel->getDataBerita();
			$data = array(			
				'berita' => $berita,
				'nama'=> $this->session->userdata('nama'),				
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/daftarberita',$data);
			$this->load->view('Kandidat/footer');
		}	
	}

	public function daftarberita()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$where = array(
				'username'=> $this->session->userdata('username'),				
				);			
			$datakandidat = $this->KandidatModel->getDataKandidat($where);
			$ha = $datakandidat['idUser'];
			$berita = $this->BeritaModel->getDataBeritaKandidat($ha);
			$data = array(			
				'berita' => $berita,
				'nama'=> $this->session->userdata('nama'),
				'idUser'=> $this->session->userdata('idUser')
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/daftarberita',$data);
			$this->load->view('Kandidat/footer');
		}	
	}

	public function timeline()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
			$data = array(			
				'nama'=> $this->session->userdata('nama'),
				'idUser'=> $this->session->userdata('idUser')
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/timeline',$data);
			$this->load->view('Kandidat/footer');
	}
}

	public function tambahberita()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
			$berita = $this->BeritaModel->getDataBerita();
			$data = array(			
				'berita' => $berita,
				'nama'=> $this->session->userdata('nama'),
				'idUser'=> $this->session->userdata('idUser')
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/tambahberita',$data);
			$this->load->view('Kandidat/footer');
		}
	}

	public function aspirasi()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} else {
			$aspirasi = $this->AspirasiModel->getDataAspirasi();
			$data = array(			
				'aspirasi' => $aspirasi,
				'nama'=> $this->session->userdata('nama'),
				'idUser'=> $this->session->userdata('idUser')
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/daftaraspirasi',$data);
			$this->load->view('Kandidat/footer');
		}	
	}

	public function profile()
	{
		if ($this->session->userdata('status')!="login"){
			redirect('Auth');
		} 
		else {
			$where = array(
				'username'=> $this->session->userdata('username'),				
				);			
			$datakandidat = $this->KandidatModel->getDataKandidat($where);

			$data = array(
				'nama'=> $this->session->userdata('nama'),
				'datakandidat' => $datakandidat
				);
			$this->load->view('Kandidat/header', $data);
			$this->load->view('Kandidat/editprofile', $data);
			$this->load->view('Kandidat/footer');
		}
	}

	public function editProfile()
		{
			$data = $this->input->post(null,TRUE);
	        $edit = $this->KandidatModel->updateKandidat($data);
	        if($edit){
	            $this->session->set_flashdata('alert', 'berhasiledit');
	            $data_session = array(
					'username' => $data['username'],
					'nama' => $data['nama'],
					'status' => "login"
				);
 
			$this->session->set_userdata($data_session); 
	            redirect('Kandidat/profile');
	        }else{
	            echo "<script>alert('Gagal Edit Data');</script>";

	        }
		}


	public function addBerita()
	{
		//Check whether user upload picture
		$picture = '';
        if(!empty($_FILES['foto']['name'])){
            $config['upload_path'] = 'assets/Frontend/berita_img/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $_FILES['picture']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('foto')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }

        }
        
        else{
            $picture = '';
        }
        
        //Prepare array of user data
       	$data = $this->input->post(null,TRUE);
        
        //Pass user data to model
        $insert = $this->BeritaModel->insertBerita($data,$picture);
        if($insert){
            $this->session->set_flashdata('alert', 'berhasilinsert');
            redirect('Kandidat/daftarberita');
        }
        else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }  
	}
	public function editBerita()
	{
		$data = $this->input->post(null,TRUE);
        $edit = $this->BeritaModel->updateBerita($data);
        if($edit){
            $this->session->set_flashdata('alert', 'berhasiledit');
            redirect('Kandidat/daftarberita');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
	}

	public function deleteBerita()
	{
		$id = $this->input->post('idBerita');
        $hapus = $this->BeritaModel->deleteBerita($id);
        if($hapus){
            $this->session->set_flashdata('alert', 'berhasildelete');
            redirect('Kandidat/daftarberita');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
	}



	

}
