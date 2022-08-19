<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= APP_NAME ?> - <?= $judul ?></title>
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="uploads/caricon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
				<div class="row mt-5">
					<div class="col-9">
						<h5>Filter Tanggal Pinjam</h5>
						<form method="POST" action="<?= base_url('pesanan/report') ?>" enctype="multipart/form-data">
							<div class="row mt-3">
								<div class="col-md-3">
									<div class="form-group">
										<label for="tgl_awal">Tanggal Awal</label>
										<input type="date" name="tgl_awal" value="<?= $filter_tgl_awal == '' ? '' : $filter_tgl_awal ?>" id="tgl_awal" required="required" autocomplete="off" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="tgl_akhir">Tanggal Akhir</label>
										<input type="date" name="tgl_akhir" value="<?= $filter_tgl_akhir == '' ? '' : $filter_tgl_akhir ?>" id="tgl_akhir" required="required" autocomplete="off" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group"><br>
										<button type="submit" class="btn btn-sm btn-success mt-2" name="cari"><i class="fa fa-search"></i> Cari</button>
										<button type="submit" class="btn btn-sm btn-danger mt-2" name="reset"><i class="fa fa-ban"></i> Reset</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="data-tables datatable-dark mt-3">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
	                  				<thead>
	                    				<tr>
	                    					<th>No</th>
	                    					<th>Nama Pemesan</th>
	                    					<th>Nama Mobil</th>
	                    					<th>Jenis Bayar</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Harga</th>
										    <th>Total Harga</th>
	                    				</tr>
	                 				</thead>
	                 				<tbody>
										<?php while($pesanan = $data_pesanan ->fetch_object()) : ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $pesanan->nama_pemesan ?></td>
												<td><?= $pesanan->nama_mobil ?></td>
												<td><?= $pesanan->jenis_bayar ?></td>
												<td><?= $pesanan->tgl_pinjam ?></td>
												<td><?= $pesanan->tgl_kembali ?></td>
												<td>Rp. <?= number_format($pesanan->harga, 2, ',', '.') ?></td>
												<td>Rp. <?= number_format($pesanan->total_harga, 2, ',', '.') ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
              					</table>
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

</body>
</html>




								
								