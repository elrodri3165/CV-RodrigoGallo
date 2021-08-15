<!DOCTYPE html>
<html lang="es">
<?php include 'templates/head.php';?>
<body>
    <div id="container">
        <div id="container-header">
            <header class="">
                <h1 class="center">Curriculum Vitae - Rodrigo Nicolas Gallo</h1>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link btn btn-outline-primary" aria-current="page" href="index.php#estudios">Volver</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <div id="container-gallery">
           <?php 
            if (isset ($_GET['curso'])){
             
                $curso = $_GET['curso'];?>
                
                <img src="img/<?php echo $curso?>.png" alt="">
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>