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

                        <!-- inicio del título de la página -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Panel</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="panel.php">Multiarticulos Perú</a></li>
                                            <li class="breadcrumb-item active">Panel</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- fin del título de la página -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="badge badge-soft-primary float-right">Total</span>
                                            <h5 class="card-title mb-0">Productos</h5>
                                        </div>
                                        <div class="row d-flex align-items-center mb-4">
                                            <div class="col-12">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    1000,000.00
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="progress shadow-sm" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin del cuerpo de la tarjeta -->
                                </div><!-- fin de la tarjeta-->
                            </div> <!-- fin de la columna-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="badge badge-soft-primary float-right">Total</span>
                                            <h5 class="card-title mb-0">Ventas</h5>
                                        </div>
                                        <div class="row d-flex align-items-center mb-4">
                                            <div class="col-12">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    1000,000.00
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="progress shadow-sm" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin del cuerpo de la tarjeta -->
                                </div><!-- fin de la tarjeta-->
                            </div> <!-- fin de la columna-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="badge badge-soft-primary float-right">Total</span>
                                            <h5 class="card-title mb-0">Gastos</h5>
                                        </div>
                                        <div class="row d-flex align-items-center mb-4">
                                            <div class="col-12">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    S/1000,000.00
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="progress shadow-sm" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin del cuerpo de la tarjeta -->
                                </div>
                                <!-- fin de la tarjeta -->
                            </div> <!-- fin de la columna -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <span class="badge badge-soft-primary float-right">Total</span>
                                            <h5 class="card-title mb-0">Facturación</h5>
                                        </div>
                                        <div class="row d-flex align-items-center mb-4">
                                            <div class="col-12">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    S/1000,000.00
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="progress shadow-sm" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                        </div>
                                    </div>
                                    <!-- fin del cuerpo de la tarjeta -->
                                </div><!-- fin de la tarjeta-->
                            </div> <!-- fin de la columna -->
                        </div>
                        <!-- fin de la fila -->

                        <div class="row">
                            <!-- fin de la columna -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Top 5 Clientes</h4>
                                        <p class="card-subtitle mb-4 font-size-13">Listado de clientes con mayor compra en el mes.
                                        </p>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Cliente</th>
                                                        <th>Teléfono</th>
                                                        <th>Email</th>
                                                        <th>Ubicación</th>
                                                        <th>Fecha de creación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                        </td>
                                                        <td>
                                                            937-330-1634
                                                        </td>
                                                        <td>
                                                            pauljfrnd@jourrapide.com
                                                        </td>
                                                        <td>
                                                            Nueva York
                                                        </td>
                                                        <td>
                                                            07/07/2018
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- fin del cuerpo de la tarjeta -->

                                </div>
                                <!-- fin de la tarjeta -->
                            </div>
                            <!-- fin de la columna -->

                        </div>
                        <!-- fin de la fila -->

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


        <!-- Sparkline Js-->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Js-->
        <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

        <!-- Chart Custom Js-->
        <script src="assets/pages/knob-chart-demo.js"></script>


        <!-- Morris Js-->
        <script src="../plugins/morris-js/morris.min.js"></script>

        <!-- Raphael Js-->
        <script src="../plugins/raphael/raphael.min.js"></script>

        <!-- Custom Js -->
        <script src="assets/pages/dashboard-demo.js"></script>

        <!-- App js -->
        <script src="assets/js/theme.js"></script>

    </body>

</html>