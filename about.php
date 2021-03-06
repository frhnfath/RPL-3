<?php

include "koneksi.php";

session_start();
if (isset($_SESSION['login'])) {
  header("location: about-signed.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : Tentang</title>
		<link rel="icon" type="image/ico" href="favicon.ico"/>
		<!-- STYLE AND BOOTSTRAP LOAD -->
		<link rel="stylesheet" href="css/styles.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
			crossorigin="anonymous"
		/>
		<!-- FONTS -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Secular+One&family=Slabo+13px&display=swap" rel="stylesheet">
		<!-- FONTAWESOME -->
		<script src="https://kit.fontawesome.com/0efdbc0531.js" crossorigin="anonymous"></script>
		<!-- BOOTSTRAP SCRIPTS -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
			crossorigin="anonymous"
		></script>
	</head>
	
	<body>
		<section id="navigator">
		<div class="container-fluid bg-light">
			<!-- Nav Bar -->
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<div class="container-fluid">
				    <a class="navbar-brand" href="index.php">
						<img id="logoBFore" src="images/logo-Navbar.png" alt="BFore-Logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsing" aria-controls="navbarCollapsing" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapsing">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="about.php">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="forum.php">Forum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="help.php">Bantuan</a>
							</li>
							<li class="nav-item">
								<a id="tombolLink" class="nav-link" href="signin.php">Masuk</a>
							</li>
							<li class="nav-item">
								<a id="tombolLink" class="nav-link" href="signup.php">Daftar</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		</section>

		<section id="about-big-promo">
			<div class="container-fluid">
				<img id="about-bigPromoImg" class="img-fluid rounded mx-auto d-block" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
			</div>
		</section>

		<section id="about-mid1section">
			<div class="container-fluid" style="text-align: center;">
				<p style="font-family: Roboto, sans-serif;">BFore adalah web forum untuk memudahkan mahasiswa IPB dalam mencari informasi tertentu, khususnya minat, bakat, dan informasi terbaru lainnya 
					yang diharapkan dapat menambah wawasan, meningkatkan minat dan bakat mahasiswa sesuai dengan yang ingin diketahui oleh mahasiswa tersebut. 
					Hal itu dikarenakan kunci sukses mahasiswa adalah pengetahuan yang luas, dan terbuka. </p>
				<div class="row feature-grid">
					<div class="col-lg-6 g-4">
						<div id="featureCardBlue" class="card h-100">
							<div class="card-body">
								<div class="card-content">
									<p>Dalam BFore dapat melakukan aktivitas tanya jawab, untuk diskusi berbagi pengetahuan secara online.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 g-4">
						<div id="featureCardBlue" class="card h-100">
							<div class="card-body">
								<div class="card-content">
									<p>Forum yang dapat menghubungkan mahasiswa satu dengan yang lain</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about-mid2section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 g-4">
						<p>Untuk memberikan suara yang positif pilih naik ke atas 
							dan untuk memberikan suara negatif pilih turun ke bawah</p>
					</div>
					<div class="col-lg-6 g-4">
						<div class="card">
							<div class="card-body">
							<p>Kegiatan rutin yang diselenggarakan oleh Himalkom meliputi komunitas peminatan, seminar dan kompetisi bidang TIK, pembinaan lomba, dan bina desa. 
							Komunitas di ilkom itu ada competitive programing, cyber security, game development, agribot, agriweb, mobile apps development, data mining, dan ui ux.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about-botsection">
			<div class="container-fluid" style="text-align: center;">
				<p>Temukan pertanyaan untuk dijawab, atau tanyakan pertanyaan Anda sendiri</p>
				<a class="btn btn-primary" style="margin-right:1%;" role="button" href="forum.php">Lihat pertanyaan baru</a>
				<a class="btn btn-primary" role="button" href="signin.php">Ajukan pertanyaan</a>
			</div>
		</section>

	</body>
	<footer class="bg-secondary">
		<p>Copyright © 2021 BFore. All rights reserved.</p>
		<a class="fa fa-google socmed" href="https://sites.google.com/view/rpl-kelompok-3/produk?authuser=0"></a>
		<a class="fa fa-github socmed" href="https://github.com/frhnfath/RPL-3"></a>
	</footer>
</html>
