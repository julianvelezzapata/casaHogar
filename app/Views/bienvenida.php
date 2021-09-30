<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="<?php echo(base_url('public/styles/estilos.css')) ?>">
	<link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
	<title>animalandia</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
				<i class="fas fa-paw"></i>
					Animalandia
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
				</ul>			
				</div>
			</div>
		</nav>
	</header>
	<!-- carousel -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 md-5">
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<!--   me ahorrop el php y el echo?> -->
								<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="foto">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="foto">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="foto">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
				<div class="col-12 d-flex justify-content-center">
					<h1> Hogar de animales ANIMALANDIA</h1>
					<p>Casa hogar ANIMALANDIA  atiende desde 1996 animales y fauna silvestre en estado de abandono , ofreciendo  atencion integral , además sonos fabricantes de comida  y accesorios para todo tipo de masc</p>
				</div>
			</div>
		</div>
	</section>
	



	<!-- scripts -->
	<script src="https://kit.fontawesome.com/8018fc5e80.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>	
</body>
</html>