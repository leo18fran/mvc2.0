<h1>Crear Usuarios</h1>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
<div class="container">
    <input class="form-control mb-2" type="text" name="nombres" placeholder="Ingrese nombres">
    <input class="form-control mb-2" type="text" name="apellidos" placeholder="Ingrese apellidos">
    <input class="form-control mb-2" type="number" name="codigo" placeholder="Ingrese Codigo/DNI">
    <input class="form-control mb-2" type="password" name="password" placeholder="Ingrese Contraseña">
    <select class="form-select form-select-lg mb-3" name="tipo">
        <option value="estudiante">Estudiante</option>
        <option value="profesor">Profesor</option>
        <option value="administrador">Administrador</option>
    </select><br>
    <input class="btn btn-outline-dark" type="submit" name="submit" value="Guardar">
</div>
</form>
<?php
if(!empty($_POST)){
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = $_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $ch = curl_init();
    $dataPost = array(
        "nombres"=>$nombres,
        "apellidos"=>$apellidos,
        "codigo"=>$codigo,
        "password"=>$password,
        "tipo"=>$tipo
    );
    curl_setopt($ch, CURLOPT_URL, "http:/localhost/mvcactual/index.php?api/estudiantes");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
    $response = curl_exec($ch);
    curl_close($ch); 

    $respuesta = json_decode($response, true);
    if($respuesta["codigo"]=="200"){
        echo "Guardado en servidor ajeno";
    }

}