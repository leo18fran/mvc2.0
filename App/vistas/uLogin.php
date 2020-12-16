<?php
use App\Controladores\ControladorUsuario;
include_once "layout/login.php";
?>
<center>
    <h1 class="log-3">Iniciar Sesión</h1>
    <form method="post" action="index.php?login">
        <div class="container">
            <h2>Codigo</h2>
            <input class="form-control mb-2" type="text" name="codigo" placeholder="Ingrese su Codigo"><br>
            <h2>Contraseña</h2>
            <input class="form-control mb-2" type="text" name="pass" placeholder="Ingrese su Contraseña"><br>
            <center>
            <input class="btn btn-outline-dark" type="submit" name="submit" value="Iniciar Sesión"><br>
            </center>
        </div>
    </form>
    <style>
    .log-3 {
        height: 290px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size:62px;
    }
    .btn{
        height:58px;
        width:120px
    }
    .form-control{
        font-size:20px;
    }
    .btn{
        font-size:20px;
    }
    </style>
</center>
<?php
    if(isset($_POST["submit"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->login($codigo, $password);
    }
