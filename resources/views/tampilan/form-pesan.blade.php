
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="preconnect" href="https:adminkit/fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https:adminkit/demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Pesan | Kamar Hotel</title>

	<link href="/form-pesan" rel="stylesheet">
	<link href="https:adminkit/fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Form Pesan</h1>
							<p class="lead">
								Isilah form pesan dibahan ini dengan data yang benar.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form>
										<!-- tamu -->
										<div class="mb-3">
											<label class="form-label">Nama Tamu</label>
											<input class="form-control form-control-lg" type="text" name="nama_tamu" placeholder="Masukan Nama Anda" />
										</div>
										<div class="mb-3">
										<label for="exampleInputEmail1">Jenis Kelamin</label>
										<select class="form-control" name="jenis_kelamin">
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Alamat</label>
											<textarea class="form-control" name="alamat" rows="3" placeholder="Masukan Alamat Anda"></textarea>
										</div>
										<div class="mb-3">
											<label class="form-label">No Telepon</label>
											<input class="form-control form-control-lg" type="number" name="no_telepon" placeholder="Masukan No Telepon Anda" />
										</div>

										<!-- kamar -->
										<div class="mb-3">
											<label class="form-label">No Kamar</label>
											<input class="form-control form-control-lg" type="number" name="no_kamar" placeholder="Masukan No Kamar" />
										</div>
										<div class="mb-3">
											<label class="form-label">Nama Kamar</label>
											<input class="form-control form-control-lg" type="text" name="no_kamar" placeholder="Masukan No Kamar" />
										</div>

										<!-- fasilitas -->
										<div class="mb-3">
											<label class="form-label">Fasilitas</label>
											<input class="form-control form-control-lg" type="text" name="fasilitas" placeholder="Masukan fasilitas" />
										</div>
										<div class="mb-3">
										<label for="exampleInputEmail1">Harga</label>
										<select class="form-control" name="harga">
											<option value="1.000.000">500.000</option>
											<option value="1.000.000">1.000.000</option>
											<option value="1.000.000">1.500.000</option>
											<option value="2.000.000">2.000.000</option>
											<option value="2.000.000">2.500.000</option>
											<option value="3.000.000">3.000.000</option>
										</select>
										</div>
										<div class="text-center mt-3">
											<a href="/form-sukses" class="btn btn-lg btn-primary">Pesan Kamar</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>