<?php 

class C_Pesanan extends Controller {
	public function __construct(){
		$this->addFunction('url');
		if(!isset($_SESSION['login'])) {
			$_SESSION['error'] = 'Anda harus masuk dulu!';
			header('Location: ' . base_url());
		}
		
		$this->addFunction('web');
		$this->addFunction('session');
		$this->req = $this->library('Request');
		$this->pesanan = $this->model('M_Pesanan');
		$this->j_bayar = $this->model('M_Jenis_Bayar');
		$this->mobil = $this->model('M_Mobil');
		$this->pemesan = $this->model('M_Pemesan');
	}

	public function index(){
		$data = [
			'aktif' => 'pesanan',
			'judul' => 'Data Pesanan',
			'data_pesanan' => $this->pesanan->lihat(),
			'data_pemesan' => $this->pemesan->lihat(),
			'data_mobil' => $this->mobil->lihat(),
			'data_jenis_bayar' => $this->j_bayar->lihat(),
			'no' => 1
		];
		$this->view('pesanan/index', $data);
	}

	public function tambah(){
		if(!isset($_POST['tambah'])) redirect('pesanan');
		$data = [
			'id_pemesan' => $this->req->post('id_pemesan'),
			'id_mobil' => $this->req->post('id_mobil'),
			'id_jenis_bayar' => $this->req->post('id_jenis_bayar'),
			'harga' => $this->req->post('harga'),
			'tgl_pinjam' => $this->req->post('tgl_pinjam'),
			'tgl_kembali' => $this->req->post('tgl_kembali'),
		];

		if($this->pesanan->tambah($data)){
			setSession('success', 'Data berhasil ditambahkan!');
			redirect('pesanan');
		} else {
			setSession('error', 'Data gagal ditambahkan!');
			redirect('pesanan');
		}
	}

	public function ubah($id){
		if(!isset($id) || $this->pesanan->cek($id)->num_rows == 0) redirect('pesanan');
		$pesanan = $this->pesanan->lihat_id($id)->fetch_object();
		$id_pemesan = $pesanan->id_pemesan;
		$id_mobil = $pesanan->id_mobil;
		//$id_perjalanan = $pesanan->id_perjalanan;
		$id_jenis_bayar = $pesanan->id_jenis_bayar;

		$data = [
			'aktif' => 'pesanan',
			'judul' => 'Ubah Pesanan',
			'pemesan' => $this->pemesan->lihat_id($id_pemesan)->fetch_object(),
			'mobil' => $this->mobil->lihat_id($id_mobil)->fetch_object(),
			'jenis_bayar' => $this->j_bayar->lihat_id($id_jenis_bayar)->fetch_object(),
			'pesanan' => $pesanan
		];
		$this->view('pesanan/ubah', $data);
	}

	public function proses_ubah($id){
		if(!isset($id) || $this->pesanan->cek($id)->num_rows == 0 || !isset($_POST['ubah'])) redirect('pesanan');

		$data = [
			'harga' => $this->req->post('harga'),
			'tgl_kembali' => $this->req->post('tgl_kembali'),
		];
		if($this->pesanan->ubah($data, $id)){
			setSession('success', 'Data berhasil diubah!');
			redirect('pesanan');
		} else {
			setSession('error', 'Data gagal diubah!');
			redirect('pesanan');
		}
	}

	public function hapus($id = null){
		if(!isset($id) || $this->pesanan->cek($id)->num_rows == 0) redirect('pesanan');

		if($this->pesanan->hapus($id)){
			setSession('success', 'Data berhasil dihapus!');
			redirect('pesanan');
		} else {
			setSession('error', 'Data gagal dihapus!');
			redirect('pesanan');
		}
	}

	public function detail($id){
		if(!isset($id) || $this->pesanan->cek($id)->num_rows == 0) redirect('pesanan');

		$data = [
			'aktif' => 'pesanan',
			'judul' => 'Detail Pesanan',
			'pesanan' => $this->pesanan->detail($id)->fetch_object(),
		];

		$this->view('pesanan/detail', $data);
	}

	public function report(){
		$filter_tgl_awal = ''; 
		$filter_tgl_akhir = '';

		if(isset($_POST['cari'])) {
			$filter_tgl_awal = $_POST['tgl_awal']; 
			$filter_tgl_akhir = $_POST['tgl_akhir'];
		} else if(isset($_POST['reset'])) {
			$filter_tgl_awal = ''; 
			$filter_tgl_akhir = '';
		}
		// var_dump($filter_tgl_awal, $filter_tgl_akhir);
		// var_dump($this->pesanan->lihat($filter_tgl_awal,$filter_tgl_akhir));
		$data = [
			'aktif' => 'pesanan',
			'judul' => 'Report',
			'filter_tgl_awal' => $filter_tgl_awal,
			'filter_tgl_akhir' => $filter_tgl_akhir,
			'data_pesanan' => $this->pesanan->lihat($filter_tgl_awal,$filter_tgl_akhir),
			'data_pemesan' => $this->pemesan->lihat(),
			'data_mobil' => $this->mobil->lihat(),
			'data_jenis_bayar' => $this->j_bayar->lihat(),
			'no' => 1
		];
		$this->view('pesanan/report', $data);
	}
}