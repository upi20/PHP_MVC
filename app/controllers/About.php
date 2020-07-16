<?php

class About extends Controller{
	public function index($nama = "Isep Lutpi Nur", $pekerjaan = "Mahasiswa", $umur = 20){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = "About me";
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/foother');
	}
	public function page(){
		$data['judul'] = 'pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/foother');
	}
}
