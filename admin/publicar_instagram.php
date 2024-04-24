<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Multiarticulos Perú - Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Panel de Administración de Multiarticulos Perú, tu destino para una amplia variedad de productos." name="description" />
        <meta content="EvoluTi-Perú" name="AngelChocca" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="../plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">
            
                    <div class="d-flex align-items-left">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
            
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> Crear Nuevo
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">
            
                                <!-- elemento-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Aplicación
                                </a>
            
                                <!-- elemento-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Software
                                </a>
            
                                <!-- elemento-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Sistema EMS
                                </a>
            
                                <!-- elemento-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Aplicación CRM
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <?php include ('layout/header.php');?>
                </div>
            </header>
            

            <?php include ('layout/sidebar.php');?>


            <!-- ============================================================== -->
            <!-- Inicio del contenido derecho aquí -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center min-vh-100">
                                <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center mb-5">
                                                    <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                        <img src="assets/images/Logo_evoluti.png" width="30px" alt="Logo"> <b style="color: #283C50;">EvoluTI Perú</b>
                                                    </a>
                                                </div>
                                                
                                                <div class="text-center">
                                                    <img src="assets/images/maintenance.svg" alt="error" height="180">
                                                    <h1 class="h4 mb-3 mt-4">El Sitio esta en Mantenimiento</h1>
                                                    <p class="text-muted mb-4 w-75 m-auto">Estamos haciendo que el sistema sea más asombroso. Regresaremos en un momento. </p>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-12 text-center">
                                                        <a target="_blank" href="https://wa.link/v3eggg" class="btn btn-success"><i class="fab fa-whatsapp mr-2"></i>Comunicarme con la Empresa</a>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div> <!-- end .padding-5 -->
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div> <!-- end .w-100 -->
                            </div> <!-- end .d-flex -->
                        </div> <!-- end col-->
                    </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- Fin del contenido de la página -->

                <?php include ('layout/footer.php');?>

            </div>
            <!-- fin del contenido principal-->


        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/simplebar.min.js"></script>


        <!-- third party js -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.flash.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.select.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/pages/datatables-demo.js"></script>

        <!-- App js -->
        <script src="assets/js/theme.js"></script>

    </body>

</html>