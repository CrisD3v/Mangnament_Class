<nav class="nav bg-dark lateral-nav">
			<div class="--user-perfil">
				<i class="bi bi-person-circle --perfil"></i>
				<h2 class="h5 --Title">DASHBOARD</h2>
			</div>
			<ul class="navbar-nav --box-nav">
				<li class="nav-item --Items <?php echo $active_Clases;?>">
					<i class="bi bi-card-checklist"></i
					><a href="../PHP/Dashboard.php" class="nav-link">Clases</a>
				</li>
				<li class="nav-item --Items <?php echo $active_Estudiantes;?>">
					<i class="bi bi-person-fill"></i
					><a href="../PHP/Estudiantes.php" class="nav-link">Estudiantes</a>
				</li>
				<li class="nav-item --Items <?php echo $active_Codigo;?>">
					<i class="bi bi-ticket-fill"></i
					><a href="../PHP/Codigos.php" class="nav-link">Codigo</a>
				</li>
			</ul>
</nav>