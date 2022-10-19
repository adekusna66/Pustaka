<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<style type="text/css">
			@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,600;1,700&display=swap");
			@media (min-width: 576px) {
				.table {
					width: auto;
				}
			}
			.navbar {
				background-color: #a2d9ff;
			}

			.nav-link,
			.navbar-brand,
			.display-4 {
				font-weight: 700;
				font-family: poppins;
			}
			.jumbotron {
				padding-top: 2rem;
				background-color: #a2d9ff;
			}
			.table h2,
			td {
				font-family: poppins;
			}
			.footer {
				background: #a2d9ff;
				width: auto;
				margin: auto;
				padding: 15px;
			}
			.footer p {
				text-align: center;
				font-weight: bold;
			}
			.footer {
				margin-top: 120px;
			}
		</style>
		<title>View Form</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#"><span>Di-Lemas</span></a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>
		<section class="jumbotron text-center">
			<h1 class="display-4">DATA MAHASISWA</h1>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path
					fill="white"
					fill-opacity="1"
					d="M0,320L10.9,272C21.8,224,44,128,65,80C87.3,32,109,32,131,32C152.7,32,175,32,196,58.7C218.2,85,240,139,262,160C283.6,181,305,171,327,149.3C349.1,128,371,96,393,106.7C414.5,117,436,171,458,208C480,245,502,267,524,234.7C545.5,203,567,117,589,112C610.9,107,633,181,655,202.7C676.4,224,698,192,720,181.3C741.8,171,764,181,785,176C807.3,171,829,149,851,122.7C872.7,96,895,64,916,96C938.2,128,960,224,982,272C1003.6,320,1025,320,1047,282.7C1069.1,245,1091,171,1113,154.7C1134.5,139,1156,181,1178,165.3C1200,149,1222,75,1244,74.7C1265.5,75,1287,149,1309,154.7C1330.9,160,1353,96,1375,64C1396.4,32,1418,32,1429,32L1440,32L1440,320L1429.1,320C1418.2,320,1396,320,1375,320C1352.7,320,1331,320,1309,320C1287.3,320,1265,320,1244,320C1221.8,320,1200,320,1178,320C1156.4,320,1135,320,1113,320C1090.9,320,1069,320,1047,320C1025.5,320,1004,320,982,320C960,320,938,320,916,320C894.5,320,873,320,851,320C829.1,320,807,320,785,320C763.6,320,742,320,720,320C698.2,320,676,320,655,320C632.7,320,611,320,589,320C567.3,320,545,320,524,320C501.8,320,480,320,458,320C436.4,320,415,320,393,320C370.9,320,349,320,327,320C305.5,320,284,320,262,320C240,320,218,320,196,320C174.5,320,153,320,131,320C109.1,320,87,320,65,320C43.6,320,22,320,11,320L0,320Z"
				></path>
			</svg>
		</section>
		<div class="container text-center">
			<form action="<?= base_url('formsiswa/cetak'); ?>" method="post">
				<table class="table table-bordered border-warning mt-3" align="center">
					<thead>
						<th>Nama Siswa</th>
						<th>NIS</th>
						<th>Kelas</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
					</thead>
					<tbody>
						<?php 
                            echo '<tr>
									<td>'.$nama.'</td>
									<td>'.$nis.'</td>
									<td>'.$kelas.'</td>
									<td>'.$tgllahir.'</td>
									<td>'.$tempatlahir.'</td>
									<td>'.$alamat.'</td>
									<td>'.$jenkel.'</td>
									<td>'.$agama.'</td>
								</tr>';
						?>
					
					</tbody>
				</table>
			</form>
		</div>
		<div class="container text-center">
			<a
				href="<?= base_url('formsiswa'); 
            ?>"
				>Kembali</a
			>
		</div>

		<div class="footer">
			<p>Copyright &copy; Ade Kusna Eka Syahputra</p>
		</div>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
	</body>
</html>
