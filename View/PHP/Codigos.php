<?php
	$active_Codigo = 'active';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../CSS/Style.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
		/>
		<title>Document</title>
	</head>
	<body>
	
		<?php 
			include '../Navs/LateralNav.php';
		?>

		<section class="--Content mt-5">
			<div class="container-fluid">
               <div class="title ms-5">
					<h2 class="--Title text-center h1">CODIGOS</h2>
					<span class="--Line-Border"></span>
			   </div>
				<div class="row flex-row-reverse ">
					<div class="col-md-10 p-5 pt-4">
							<div class="content">
								<select class="form-select w-50" aria-label="Default select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
								  </select>
								<input class="form-control w-75 ms-1" id="InputC" type="text" placeholder="0000" aria-label="Disabled input example" disabled value="">
								<div class="button">
									<button class="btn btn-danger ms-2" id="Btn">OBTENER</button>
								</div>
							</div>
						<div class="--Table mt-5">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">TOKEN</th>
										<th scope="col">HORA</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">3</th>
										<td>AGREGAR , EDITAR</td>
										<td>EDITAR</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="../../Model/C_Code/EventoRcode.js"></script>
	</body>
</html>
