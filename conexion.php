<?php 
$nombre = $_POST['nombre'];
$pass = $_POST['password'];

$con = mysqli_connect("basedatos1:3306", "root", "equipo2", "usuarios");
$query = "select * from clientes1 where username='".$nombre."' and contrasena='".$pass."'";

if($con){
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nombre = $row['nombre'];
            $username = $row['username'];
            $password = $row['contra'];
            $correo = $row['correo'];

            echo '<!DOCTYPE html>
            <html lang="es">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=1, initial-scale=1.0">
                <title>GAS equipo2. | Sesion</title>
                <link rel="stylesheet" href="estilosesion.css">
                <link rel="shortcut icon" href="undraw_male_avatar_323b.svg" type="image/x-icon">
            </head>
            
            <body>
                <header>
                    <div class="contentheader">
                        <img class="imagenh" src="data_maintenance_isometric.svg">
                        <dir></dir>
                        <nav>
                            <ul class="menu">
                                <li><a href="index.html">Inicio</a></li>
                                <li><a href="index.html">Portafolio</a></li>
                                <li><a href="http://redneuronal.science:8080/app/query?t=exito">Lectura</a></li>
                                <li><a href="http://redneuronal.science:5000">Pagina</a></li>
                                
                            </ul>
                        </nav>
                </header>
            
                <div class="formulario">
                    <form action="">
                        <div class="user">
                            <img src="undraw_male_avatar_323b.svg">
                            <h1>Nombre: '.$nombre.'</h1>
                        </div>
                        <div class="infouser">
                            <h2>Contrase??a: '.$password.'</h2><br>
                            <h2>Correo: '.$correo.'</h2><br>
                            <h2>UserName: '.$username.'</h2><br>
                        </div>
                    </form>
                </div>
            
                <footer>
                    <div class="conteninfo">
                        <h1>Gas equipo2.</h1>
                        <p>P??gina dise??ada por equipo 2. | Todos los derechos reservados</p>
            
                    </div>
                </footer>
            </body>
            
            </html>';
        }
      } else {
        echo'<script type="text/javascript">
        alert("Usuario o contrase??a incorrectos");
        window.location.href="index.html";
        </script>';
      }

    mysqli_close($con);
}else{
    echo "no conectado";
}

?>
