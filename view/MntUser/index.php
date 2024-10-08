<?php
require_once("../../config/conexion.php");

if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	
	<title>HelpDesk::Mantenimiento a usuarios</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>
		<!-- Esto va a cambiar -->
		<div class="page-content">
			<div class="container-fluid">
				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Mantenimiento a usuarios</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Mantenimiento a usuarios</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
				<button type="button" id="btnnuevo" class="btn btn-primary">Nuevo usuario</button>
					<table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 10%;">Nombre(s)</th>
								<th style="width: 10%;">Apellidos</th>
								<th class="d-none d-sm-table-cell" style="width: 40%;">Correo</th>
								<th class="d-none d-sm-table-cell" style="width: 5%;">Password</th>
								<th class="d-none d-sm-table-cell" style="width: 5%;">Rol</th>
								<th style="width: 5%;">Editar</th>
								<th style="width: 5%;">Eliminar</th>
								
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div><!--.container-fluid-->
		</div><!--.page-content-->

		<?php require_once("modalmantenimiento.php");?>
		
		<?php require_once("../MainJs/js.php"); ?>
		
		<script type="text/javascript" src="mntusuario.js"></script>

		

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>