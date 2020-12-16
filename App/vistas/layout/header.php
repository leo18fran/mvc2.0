<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mvc-proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(90deg, #61e4d9, #45a6e7);
            font-family:'Burbank Big';
        }
        h1{
            font-size: 27px;
            font-family:'Burbank Big';
        }
        h2{
            font-size: 22px;
            font-family:'Burbank Big';
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        Empresa
                    </div>
                </nav>

            </div>

        </div>
<div class="row">
    <div class="col">

                <?php 
                echo "<li><a href='index.php?bienvenido'>Inicio</a></li>";
                switch ($_SESSION["tipo"]) {
                    case "profesor":
                        echo "Profesor
                        <li><a href='index.php?ver-cursos-a-cargo'>Ver Cursos a Cargo</a></li>";
                        break;

                    case "estudiante":
                        echo "Estudiante
                        <li><a href='index.php?ver-notas-estudiante'>Ver Notas</a></li>
                        <li><a href='index.php?ver-matricula-estudiante'>Ver Matricula</a></li>";
                        break;
                    
                    case "administrador":
                        echo "Administrador
                        <li><a href='index.php?crear-usuarios'>Crear Usuarios</a></li>
                        <li><a href='index.php?crear-plan-de-estudios'>Crear Plan de Estudios</a></li>
                        <li><a href='index.php?asignar-cursos'>Asignar Cursos</a></li>";
                        break;
                }

                echo "<li><a href='logout.php'>salir</a></li>";

           ?>
</div>
<div class="col-9">
