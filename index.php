<?php 
//includo i due file nell'index
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <ul>
        <?php foreach($movies as $movie){?>
            <li>
                Titolo : <?php echo $movie->titolo?>
                <br>
                Voto : <?php echo $movie->mediaVoti()?>
                <br>
                Genere :<?php echo $movie->generiFilm()?>
                <br>
                Descrizione film : <?php echo $movie->descrizione?>
                <br>
                Durata film : <?php echo $movie->durata?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>