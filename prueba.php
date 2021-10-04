<?php 
include 'php/sesiones_code.php';
$showImage = new sesion_code();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!-- boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <!-- <section class='pictures_index'>
        <img src="img/Sesiones_familiares/1.jpg" alt="">
        <img src="img/Sesiones_familiares/2.jpg" alt="">
        <img src="img/Sesiones_familiares/3.jpg" alt="">
        <img src="img/Sesiones_familiares/4.jpg" alt="">
        <img src="img/Sesiones_familiares/5.jpg" alt="">
    </section> -->

            <div>            
                <?php                
                $showImage->ShowImageIndex('s_familiares','Familiares');
                ?>
            </div>
            
            <div>            
                <?php                
                $showImage->ShowImageIndex('e_culturales','Eventos Culturales');
                ?>
            </div>

</body>
</html>