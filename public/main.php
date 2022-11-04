<?php

use Src\service\Apiservice;

require __DIR__ ."/../vendor/autoload.php";
$gatos=(new Apiservice)->getGatos()
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
                $contador=1;
                    foreach ($gatos as $gato) {
                        echo ($contador == 1) ? " <div class='carousel-item active'>" : " <div class='carousel-item'>";
    
                        echo "<div class='card' style='width: 18rem;'>";
                        echo "<img src='{$gato->getimagen()}' class='card-img-top' alt=''poster peli'>";
                        echo   "<div class='card-body'>";
                        echo   "<h5 class='card-title'><b>{$gato->getAutor()}</b></h5>";
                        echo "<p class='card-text'>{$gato->getLikes()}</p>";
                       
                        echo "</div>";
                        echo " </div>";
    
                        echo "</div>";
                        $contador++;
                    }
                
                ?>



            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>