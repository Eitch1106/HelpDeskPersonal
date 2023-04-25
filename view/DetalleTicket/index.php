<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../MainHead/head.php"); ?>
    <title>HelpDesk::Detalle Ticket</title>
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
                                <h3>Detalle de ticket - 1</h3>
                                <span class="label label-pill label-danger">Cerrado</span>
                                <span class="label label-pill label-primary">Name user</span>
                                <span class="label label-pill label-default">Fecha creacion</span>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Detalle de ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">
                    
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="cat_nom">Categoria</label>
                                <input type="text" class="form-control" id="cat_nom" name="cat_nom" readonly>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tick_titulo">Título</label>
                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" readonly>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="staff_id">Quién solicita</label>
                                <input type="text" class="form-control" id="tick_staff" name="tick_staff" readonly>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tick_descrip">Descripción</label>
                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" readonly>
                                <!-- <div class="summernote-theme-1">
                                    <textarea id="tick_descrip" class="summernote" name="tick_descrip" name="name"></textarea>
                                </div> -->
                            </fieldset>
                        </div>
                    
                </div><!--.row-->

                <section class="activity-line" id="lbldetalle">
                </section><!--.activity-line-->

                <div class="box-typical box-typical-padding">
					
					<p>Ingrese su duda o consulta</p>

					<div class="row">					
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="tickd_descrip" class="summernote" name="tickd_descrip" name="name"></textarea>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12 align-self-center">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                                <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>
							</div>
						
					</div><!--.row-->

				</div>

            </div><!--.container-fluid-->
        </div><!--.page-content-->

        <?php require_once("../MainJs/js.php"); ?>
        <script type="text/javascript" src="detalleticket.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>