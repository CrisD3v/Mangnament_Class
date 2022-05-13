<header>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link <?php echo $active_Index;?>" aria-current="page" href="/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_Agenda;?>" aria-current="page" href="/View/PHP/Agenda.php">Gestion</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Start Sesion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="../PHP/Login/Login.php">Login</a></li>
                          <li><a class="dropdown-item" href="../PHP/Login/Registro.php">Sing - up</a></li>
                        </ul>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
</header>