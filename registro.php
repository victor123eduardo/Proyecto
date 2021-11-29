<?php 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$contra = $_POST['contrasena'];

$con = mysqli_connect("basedatos1:3306", "root", "equipo2", "usuarios");
$query = "insert into clientes1 values('$username', '$nombre','$correo','$contra')";

if($con){
    $result = mysqli_query($con, $query);
    if($result){
        echo'<script type="text/javascript">
        alert("Registro Correcto");
        window.location.href="index.html";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Algo salio mal :/");
        window.location.href="registro.html";
        </script>';
    }
}else{
    echo "no conectado :(";
}

?>