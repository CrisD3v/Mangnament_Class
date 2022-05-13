<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="../../CSS/Style.css">
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
		<title>Document</title>
	</head>
	<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <h1 class="--Title mt-4 mb-4">registrarse</h1>
            </div>

            <!-- Login Form -->
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" id="Nombre" class="fadeIn second IText" name="name" placeholder="Nombres">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" id="Apellido" class="fadeIn second IText" name="last" placeholder="Apellidos">
                    </div>
                    <div class="col-lg-6">
                        <input type="number" id="Documento" class="fadeIn second IText" name="dni" placeholder="Documento">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" id="Grado" class="fadeIn second IText" name="grado" placeholder="Grado">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" id="User" class="fadeIn second IText" name="user" placeholder="Username">
                    </div>
                    <div class="col-lg-6">
                        <input type="password" id="Password" class="fadeIn third IPassword" name="pass" placeholder="Password">
                    </div>
                    <div class="col-lg-12">
                        <select class="form-select w-75 ms-5 m-2" aria-label="Default select example" required>
                            <option selected class="text-center" >GENERO</option>
                            <option value="1" class="text-center" >MASCULINO</option>
                            <option value="2" class="text-center" >FEMENINO</option>
                            <option value="3" class="text-center" >OTRO</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <input type="email" id="Email" class="fadeIn second IText" name="email" placeholder="Email">    
                    </div>
                    <div class="col-lg-12">
                        <input type="text" id="Codigo" class="fadeIn second IText" name="code" placeholder="Codigo"> 
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="fadeIn fourth ISubmmit" value="Registrarse">
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="../../../index.php" class="underlineHover fw-lighter"> IR AL INICIO </a> 
                </div>
            </form>
            

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover font-monospace fw-lighter" href="./Login.php">LOGUEARTE</a>
            </div>

        </div>
    </div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
