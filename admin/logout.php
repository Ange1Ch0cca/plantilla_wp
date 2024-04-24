<?php
session_start(); //para asegurarse de que está utilizando la misma sesión
session_destroy(); //destruir la sesión

?>
    <script>
        window.location="index.php";
    </script>
<?php
//para redirigir nuevamente a "index.php" después de cerrar sesión
exit;
?>