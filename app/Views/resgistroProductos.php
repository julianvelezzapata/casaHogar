<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animalandia</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">


</head>
<body>
<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondoPrincipal">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Animalandia
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/productos/registro') ?>">Registro Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Registro Animales</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <div class="container">
        <div class="mb-3">
         <h1>Diligencia el dato del animal</h1>
        </div>
        <form method="POST" action="<?= site_url('/productos/registro/nuevo') ?>" class="mt-4">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Poductos</label>
                <input class="form-control" type="text" placeholder="productos" aria-label="default input example " name="producto">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">fotografia</label>
                <input type="text" class="form-control" placeholder="escriba el link de la fotografia"name="foto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">precio</label>
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="precio">
                
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleDataList" class="form-label">Datalist example</label>    
                <select class="form-select" aria-label="Default select example" name="tipo">
                        <option selected>escoge el animal</option>
                        <option value="1">perro</option>
                        <option value="2">caballo</option>
                        <option value="3">rata</option>
                        <option value="4">lagartija</option>
                        <option value="5">gato</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>