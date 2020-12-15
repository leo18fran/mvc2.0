<?php
include_once "includes/autoload.php";
session_start();
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
}