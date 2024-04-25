<!DOCTYPE html>
<html lang="es">

    <head>
    
        <?php include ('layout/head.php');?>

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

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Ventas</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="panel.php">Multiarticulos Perú</a></li>
                                            <li class="breadcrumb-item active">Ventas</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title"></h4>
                                    <p class="card-subtitle mb-4">
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Venta</th>
                                                <th>Fecha</th>
                                                <th>Cliente</th>
                                                <th>Total</th>
                                                <th>Productos</th>
                                                <th>Estado</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Online</td>
                                                <td>2011/04/25</td>
                                                <td>Tiger Nixon</td>
                                                <td>$320,800</td>
                                                <td>50</td>
                                                <td>Entregado</td>
                                                <td>Pagado</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Online</td>
                                                <td>2011/04/25</td>
                                                <td>Tiger Nixon</td>
                                                <td>$320,800</td>
                                                <td>63</td>
                                                <td>Entregado</td>
                                                <td>Pagado</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Online</td>
                                                <td>2011/04/25</td>
                                                <td>Tiger Nixon</td>
                                                <td>$320,800</td>
                                                <td>61</td>
                                                <td>Entregado</td>
                                                <td>Pagado</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
                        
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