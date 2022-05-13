<?php
	$active_Agenda = 'active';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="../CSS/Style.css">
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
		<title>Document</title>
	</head>
	<body>
		
		<?php
			include '../Navs/Navbar.php';
		?>


		<section class="--Pre-form">
			<div class="container">
				<h2 class="--Title text-center h1">DATOS PERSONALES </h2>
				<span class="--Line-Border"></span>
				<form action="" class="--Form">
					<div class="col-md-5 ">
						<div class="row">
							<div class="position-relative mt-4 col-md-6">
								<input type="text" class="outside" aria-label="Disabled input example" disabled required  />
								<span class="floating-label-outside">Nombres</span>
							</div>
							<div class="position-relative mt-4 col-md-6">
								<input type="text" class="outside" aria-label="Disabled input example" disabled required />
								<span class="floating-label-outside">Apellidos</span>
							</div>
							<div class="position-relative mt-4">
								<select class="form-select" aria-label="Disabled input example" disabled required>
									<option selected>GENERO</option>
									<option value="1">MASCULINO</option>
									<option value="2">FEMENINO</option>
									<option value="3">OTRO</option>
								  </select>
							</div>
							<div class="position-relative mt-4">
								<input type="text" class="outside" aria-label="Disabled input example" disabled required />
								<span class="floating-label-outside">Email</span>
							</div>
							<div class="position-relative mt-4">
								<input type="number" class="outside"  required />
								<span class="floating-label-outside">Ticket</span>
							</div>
						</div>

						<div class="button">
							<button class="btn btn-danger mt-3">VALIDAR</button>
						</div>
					</div>
				</form>
			</div>
		</section>
		<section class="--Class">
			<div class="container">
				<h2 class="--Title text-center h1">Gestiona tus Clases </h2>
				<span class="--Line-Border"></span>
				<p class="--Sub-Instruction text-center lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur tempore ad voluptatibus pariatur explicabo. Omnis ut nobis voluptatum quasi excepturi.</p>
				<form action="">
					<table class="table table-bordered">
						<thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Clase</th>
							  <th scope="col">Horario</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <th scope="row">3</th>
							  <td>
								<div class="selectbox">
									<div class="select" id="select2">
										<div class="contenido-select2">
											<h1 class="titulo">Selecciona tu clase</h1>
											<p class="descripcion">Lorem ipsum dolor sit.</p>
										</div>
										<i class="fas fa-angle-down"></i>
									</div>
								</div>
					
								<input type="hidden" name="pais" id="inputSelect" value="">
							  </td>
							  <td>
								<div class="selectbox">
									<div class="select" id="select">
										<div class="contenido-select">
											<h1 class="titulo">Selecciona Horario</h1>
											<p class="descripcion">Lorem ipsum dolor sit.</p>
										</div>
										<i class="fas fa-angle-down"></i>
									</div>
								</div>
					
								<input type="hidden" name="pais" id="inputSelect" value="">
							  </td>
							</tr>
						  </tbody>
					</table>
					<div class="button">
						<button class="btn btn-danger mt-3">GESTIONAR</button>
					</div>
				</form>
				<!--OPCIONES-->
				<div class="container w-75">
					<div class="opciones" id="opciones">
						<a href="#" class="opcion">
							<div class="contenido-opcion">
								<div class="textos">
									<h1 class="titulo">Mexico</h1>
									<p class="descripcion">Lorem ipsum dolor sit.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion">
							<div class="contenido-opcion">
								<div class="textos">
									<h1 class="titulo">España</h1>
									<p class="descripcion">Consectetur adipiscing elit.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion">
							<div class="contenido-opcion">
								<div class="textos">
									<h1 class="titulo">Colombia</h1>
									<p class="descripcion">Suspendisse eleifend venenatis.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion">
							<div class="contenido-opcion">
								<div class="textos">
									<h1 class="titulo">Argentina</h1>
									<p class="descripcion">Sed posuere laoreet dui.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion">
							<div class="contenido-opcion">
								<div class="textos">
									<h1 class="titulo">Chile</h1>
									<p class="descripcion">Dignissim hendrerit odio rhoncus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="container w-75">
					<div class="opciones2" id="opciones2">
						<a href="#" class="opcion">
							<div class="contenido-opcion2">
								<div class="textos">
									<h1 class="titulo">Mexico</h1>
									<p class="descripcion">Lorem ipsum dolor sit.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion2">
							<div class="contenido-opcion2">
								<div class="textos">
									<h1 class="titulo">España</h1>
									<p class="descripcion">Consectetur adipiscing elit.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion2">
							<div class="contenido-opcion2">
								<div class="textos">
									<h1 class="titulo">Colombia</h1>
									<p class="descripcion">Suspendisse eleifend venenatis.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion2">
							<div class="contenido-opcion2">
								<div class="textos">
									<h1 class="titulo">Argentina</h1>
									<p class="descripcion">Sed posuere laoreet dui.</p>
								</div>
							</div>
						</a>
						<a href="#" class="opcion2">
							<div class="contenido-opcion2">
								<div class="textos">
									<h1 class="titulo">Chile</h1>
									<p class="descripcion">Dignissim hendrerit odio rhoncus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			</div>
		</section>

		<script src="../JS/Main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
