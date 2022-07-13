<?php

require_once './Movie.php';

$Movie1 = new Movie('Django Unchained', 2012, 'Quantin Tarantino', 'Western');
$Movie2 = new Movie('Il Padrino', 1972, 'Francis Ford Coppola', 'Drammatico');
$Movie3 = new Movie('Il Cavaliere Oscuro', 2008, 'Christopher Nolan', 'Azione');
$Movie4 = new Movie('Il Signore degli anelli:Il ritorno del Re', 2003, 'Peter Jackson', 'Fantascienza');
$Movie5 = new Movie('Pulp Fiction', 1994, 'Quentin Tarantino', 'Thriller');
$Movie6 = new Movie('Il Buono,Il Brutto e il Cattivo', 1966, 'Sergio Leone', 'Western');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container">
        <div class="text-center text-uppercase my-4 display-1 fw-bold">movies</div>
        <div class="row g-3">
            <div class="col-4">
                <?php echo $Movie1->printCard(); ?>
            </div>

            <div class="col-4">
                <?php echo $Movie2->printCard(); ?>
            </div>

            <div class="col-4">
                <?php echo $Movie3->printCard(); ?>
            </div>

            <div class="col-4">
                <?php echo $Movie4->printCard(); ?>
            </div>

            <div class="col-4">
                <?php echo $Movie5->printCard(); ?>
            </div>

            <div class="col-4">
                <?php echo $Movie6->printCard(); ?>
            </div>
        </div>
    </div>
</body>
</html>