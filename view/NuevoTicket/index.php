<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>HelpDesk Personal</>::Nuevo Ticket</title>
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
								<h3>Nuevo Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Nuevo Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
					<p>
						This is a form to create a new ticket:
					</p>

					<h5 class="m-t-lg with-border">Ingresar los datos:</h5>

					<div class="row">
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select class="form-control" id="exampleSelect2">
									<option>Hardware</option>
									<option>Software</option>
									<option>Otros</option>
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInputEmail1">Título</label>
								<input type="text" class="form-control" id="exampleInput" placeholder="Ingrese título">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
								<div class="summernote-theme-1" >
									<textarea id="tick_descrip" class="summernote" name="name" >Ingresa tu descripción</textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12 align-self-center">
						<button type="button" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</div><!--.row-->

				</div>

			</div><!--.container-fluid-->
		</div><!--.page-content-->

		<?php require_once("../MainJs/js.php"); ?>
		<script type="text/javascript" src="nuevoticket.js"></script>
	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>