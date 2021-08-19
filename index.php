<?php

    $cant_personas = random_int(0, 28);
    $capacidad_local = 28;
    $cantidad_estado =  $capacidad_local / 4;

    $porcentaje50 = $cantidad_estado * 2;
    $porcentaje75 = $cantidad_estado * 3;

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <META HTTP-EQUIV="REFRESH" CONTENT="1.5;URL=https://www.instagram.com/loditransportes/"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado del local</title>
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- CDN de Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="bg-1">

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-md-5">
                <div style="background: #69140f; border-radius: 15px;">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center pt-3 pb-2">
                        <div class="col-12">
                            <h2 class="text-center text-uppercase" >Estado del local</h2>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center pb-4">
                        <div class="col-6 text-center">
                            <a href="index.php"><button class="btn btn-primary">Actualizar <i class="fas fa-sync-alt"></i></button></a>
                        </div>
                    </div>

                <?php if($cant_personas <= $cantidad_estado) {?>

                    <div class="row d-flex justify-content-center align-items-center" >
                        <div class="col-8 py-4" style="background: #54dd54; border-radius: 8px;">
                            <h3 class="text-center" style="color: rgba(255,255,255,0.6)">25% <small>(espacio disponible)</small></h3>
                        </div>
                    </div>

                <?php } ?>

                <?php if($cant_personas > $cantidad_estado && $cant_personas <= $porcentaje75) {?>

                <div class="row d-flex justify-content-center align-items-center" >
                    <div class="col-8 py-4" style="background: #cbdd54; border-radius: 8px;">
                        <h3 class="text-center" style="color: rgba(255,255,255,0.6)">50% <small>(espacio disponible)</small></h3>
                    </div>
                </div>

                <?php } ?>


                <?php if($cant_personas > $porcentaje75 && $cant_personas < $capacidad_local) {?>

                <div class="row d-flex justify-content-center align-items-center" >
                    <div class="col-8 py-4" style="background: #ddab54; border-radius: 8px;">
                        <h3 class="text-center" style="color: rgba(255,255,255,0.6)">75% <small>(casi completo)</small></h3>
                    </div>
                </div>

                <?php } ?>


                <?php if($cant_personas == $capacidad_local) {?>

                <div class="row d-flex justify-content-center align-items-center" >
                    <div class="col-8 py-4" style="background: #d31e1e; border-radius: 8px;">
                        <h3 class="text-center" style="color: rgba(255,255,255,0.6)">100% <small>(completo)</small></h3>
                    </div>
                </div>

                <?php } ?>
                   
                
                   
                    <div class="row d-flex justify-content-center align-items-center pt-4">
                        <div class="col-11">
                            <h4 >Cantidad de personas dentro <span class="badge badge-pill badge-danger"><?php echo "$cant_personas";?></span></h4>
                        </div>
                    </div>
                   

                    
                    <div class="row d-flex justify-content-center align-items-center pt-1 pb-3">
                        <div class="col-11">
                            <h4 >Capacidad máxima <span class="badge badge-pill badge-success">28</span></h4>
                        </div>
                    </div>
                    

                    
                    <div class="row d-flex justify-content-center align-items-center py-3" style="background: #fff;">
                        <div class="col-12 text-center">
                            <img src="assets/img/consejos.jpg" class="img-fluid " alt="">
                        </div>
                    </div>
                   


                </div>

            </div>
        </div>

    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>