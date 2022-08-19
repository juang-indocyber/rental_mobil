<?php 

class M_Pesanan extends Model{
	public function tambah($data){
		$query = $this->insert('tbl_pesanan', $data);
		$query = $this->execute();
		return $query;
	}

	public function lihat($tgl_awal='', $tgl_akhir=''){
		$str = "SELECT tbl_pesanan.id, tbl_pemesan.nama AS nama_pemesan, tbl_mobil.nama AS nama_mobil, tbl_jenis_bayar.jenis_bayar, tbl_pesanan.tgl_pinjam, tbl_pesanan.tgl_kembali, tbl_pesanan.harga AS harga, tbl_pesanan.harga * DATEDIFF(tbl_pesanan.tgl_kembali, tbl_pesanan.tgl_pinjam) AS total_harga FROM tbl_pesanan INNER JOIN tbl_pemesan ON tbl_pesanan.id_pemesan = tbl_pemesan.id INNER JOIN tbl_mobil ON tbl_pesanan.id_mobil = tbl_mobil.id INNER JOIN tbl_jenis_bayar ON tbl_pesanan.id_jenis_bayar = tbl_jenis_bayar.id";
		if($tgl_awal != '' && $tgl_akhir != '') $str = $str . " WHERE (tgl_pinjam BETWEEN '$tgl_awal' AND '$tgl_akhir')";
		$query = $this->setQuery($str);

		$query = $this->execute();
		return $query;
	}

	public function lihat_id($id){
		$query = $this->get_where('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function ubah($data, $id){
		$query = $this->update('tbl_pesanan', $data, ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function cek($id){
		$query = $this->get_where('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function hapus($id){
		$query = $this->delete('tbl_pesanan', ['id' => $id]);
		$query = $this->execute();
		return $query;
	}

	public function detail($id){
		$query = $this->setQuery("SELECT tbl_pesanan.*, tbl_pemesan.nama AS nama_pemesan, tbl_mobil.nama AS nama_mobil, tbl_jenis_bayar.jenis_bayar, tbl_pesanan.harga AS harga, tbl_pesanan.harga * DATEDIFF(tbl_pesanan.tgl_kembali, tbl_pesanan.tgl_pinjam) AS total_harga FROM tbl_pesanan INNER JOIN tbl_pemesan ON tbl_pesanan.id_pemesan = tbl_pemesan.id INNER JOIN tbl_mobil ON tbl_pesanan.id_mobil = tbl_mobil.id INNER JOIN tbl_jenis_bayar ON tbl_pesanan.id_jenis_bayar = tbl_jenis_bayar.id  WHERE tbl_pesanan.id = $id");
		$query = $this->execute();
		return $query;
	}
}