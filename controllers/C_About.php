<?php 

class C_About extends Controller {
	public function __construct(){
		$this->addFunction('url');
		if(!isset($_SESSION['login'])) {
			$_SESSION['error'] = 'Anda harus masuk dulu!';
			header('Location: ' . base_url());
		}

		$this->addFunction('web');
		$this->akun = $this->model('M_Akun');
	}
	public function index(){
		$data = [
			'aktif' => 'about',
			'judul' => 'About',
			'akun' => $this->akun->lihat(),
		];
		$this->view('about', $data);
	}
}