<?php
include_once "includes/autoload.php";
session_start();

use App\controladores\ControladorUsuario;

$request = $_SERVER['QUERY_STRING'];
switch ($request) {
//get
//administrador
    case "bienvenido":
        include_once "App/vistas/bienvenido.php";
        break;
    
    case "crear-usuarios":
        include_once "App/vistas/uCrear.php";
        break;
          
    case "crear-plan-de-estudios":
        include_once "App/vistas/planCrear.php";
        break;
    case "asignar-cursos":
        include_once "App/vistas/cursosAsignar.php";
        break;
//estudiante    
    case "ver-notas-estudiante":
        include_once "App/vistas/verNotas.php";
        break;
    case "ver-matricula-estudiante":
        include_once "App/vistas/verMatricula.php";
        break;

//profesor
    case "ver-cursos-a-cargo":
        include_once "App/vistas/verCursosprof.php";
        break;
    
//post
    case "login":
        include_once "App/vistas/uLogin.php";
        break;

    case "guardar-usuario":
       include_once "App/vistas/uCrear.php";
       break;

    default:
      include_once "App/vistas/uLogin.php";
      break;

    case "api/estudiantes":
          $metodo = $_SERVER["REQUEST_METHOD"];
          $controladorUsuario = new ControladorUsuario();

          if ($metodo == "GET"){
              $resultados = $controladorUsuario->mostrarEstudiantes();
              $estudiantes[] = null;
              foreach ($resultados as $key => $estudiante){
                  $estudiantes[$key] = array(
                      "nombres: " => $estudiante["nombres"],
                      "apellidos: " => $estudiante["apellidos"]
                  );
              }
              echo json_encode($estudiantes);
          }

          if ($metodo== "POST") {
              $nombres = $_POST["nombres"];
              $apellidos = $_POST["apellidos"];
              $codigo = $_POST["codigo"];
              $password = $_POST["password"];
              $tipo = $_POST["tipo"];
              $resultado = $controladorUsuario->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
              if ($resultado == "Guardado") {
                  echo json_encode(array(
                      "codigo" => "200",
                      "status" => "ok"
                  ));
              }
          }else{
              echo json_encode(array(
                "codigo" => "500",
                "status" => "Error"
              ));
          }

          break;
}