<?php
// Incluye el archivo de conexión a la base de datos
include("services/db_connection.php");

// Verifica si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['exampleInputEmail']; // Nombre del campo corregido
    $password = $_POST['exampleInputPassword']; // Nombre del campo corregido

    // Evita posibles ataques de inyección SQL usando declaraciones preparadas
    $stmt = $connection->prepare("SELECT id_usuarios FROM usuarios WHERE BINARY correo_acceso_usuarios = ? AND BINARY contraseña_usuarios = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // Las credenciales son correctas
        $stmt->bind_result($idUsuario);
        $stmt->fetch();

        // Inicia la sesión
        session_start();

        // Guarda la información del usuario en la sesión
        $_SESSION['idUsuario'] = $idUsuario;

        // Cierra la declaración preparada
        $stmt->close();

        // Redirecciona al usuario a dashboard.php
        header("Location: panel.php");
        exit();
    } else {
        // Las credenciales son incorrectas, muestra un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo nuevamente.";
    }
}

// Cierra la conexión a la base de datos
mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>

        <?php include ('layout/head.php');?>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
 
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="index.php" class="text-dark font-size-22 font-family-secondary">
                                            <img src="assets/images/Logo_evoluti.png" width="30px" alt="Logo"> <b style="color: #283C50;">EvoluTI Perú</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Bienvenido!</h1>
                                        <p class="text-muted mb-4">Ingrese su correo y contraseña para acceder al panel de administración de ventas.</p>
                                        <form class="user" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="exampleInputEmail" placeholder="Dirección de correo electrónico">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="exampleInputPassword" placeholder="Contraseña">
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Iniciar Sesión </button>

                                            <div class="text-center mt-4">
                                                <h5 class="text-muted font-size-16">Iniciar sesión usando</h5>
                                            
                                                <ul class="list-inline mt-3 mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </form>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-2"><a href="pages-recoverpw.php" class="text-muted font-weight-medium ml-1">¿Olvidaste tu contraseña?</a></p>
                                                <p class="text-muted mb-0">¿No tienes una cuenta? <a href="pages-register.php" class="text-muted font-weight-medium ml-1"><b>Registrarse</b></a></p>
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
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>