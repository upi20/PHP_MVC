<?php 

class Home extends Controller{
	public function index(){
		$data['judul'] = "Halaman Utama";
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/foother');
	}
}
