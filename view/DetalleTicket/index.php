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
                                <h3 id="lblnomidticket">Detalle de ticket - 1</h3>
                                <div id="lblestado"></div>
                                <span class="label label-pill label-primary" id="lblnomusuario"></span>
                                <span class="label label-pill label-default" id="lblfechcrea"></span>
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
                                <label class="form-label semibold" for="tickd_descripusu">Descripción</label>
                                <div class="summernote-theme-1">
									<textarea id="tickd_descripusu" class="summernote" name="tickd_descripusu" name="name"></textarea>
								</div>
                                <!-- <div class="summernote-theme-1">
                                    <textarea id="tick_descrip" class="summernote" name="tick_descrip" name="name"></textarea>
                                </div> -->
                            </fieldset>
                        </div>
                    
                </div><!--.row-->

                <section class="activity-line" id="lbldetalle">
                </section><!--.activity-line-->

                <div class="box-typical box-typical-padding" id="pnldetalle">
					
					<p>Ingrese su comentario</p>

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
								<button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                                <button type="button" id="btncerrarticket" class="btn btn-rounded btn-inline btn-warning">Cerrar Ticket</button>
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