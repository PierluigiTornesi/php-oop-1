<?php 

/** 
 * Class Movie
 * Descrive un movie con titolo,voto, genere , descrizione e durata
 * @author Pierluigi Tornesi
*/
class Movie{
    public $titolo; // stringa con il titolo del film
    public $voti; //array con i voti del film
    public $generi;// array con i generi del film
    public $descrizione;// stringa con la descrizione del film
    public $durata;//stringa con la durata del film in minuti

    //costruttore
    function __construct($_titolo,$_voti,$_generi,$_descrizione,$_durata = '0 min')
    {
        $this->titolo = $_titolo; 
        $this->voti = $_voti; 
        $this->generi = $_generi; 
        $this->descrizione = $_descrizione; 
        $this->durata = $_durata; 
    }

    //metodo per la media dei voti
    public function mediaVoti(){
        return array_sum($this->voti) / count($this->voti);
    }

    //metodo per i generi del film
    public function generiFilm(){
        for ($i=0; $i < count($this->generi); $i++) { 
            echo ' ' .  $this->generi[$i] . ',' ;
        }
    }
}



$movie1 = new Movie('Io sono Leggenda',[4,8,9,10,6],['fantascienza', 'azione', 'drammatico', 'thriller', 'orrore'],"New York, 2012. Un misterioso virus ha ucciso quasi tutti gli uomini e li ha trasformati in vampiri. L'unico essere umano sopravvissuto al contagio è il dottor Robert Neville, che lotta disperatamente per trovare una cura.",'104 min');


$movie2 = new Movie('Van Helsing',[8,7,5,9,4],['azione', 'orrore', 'avventura', 'fantastico'],'Il professor Abraham Van Helsing , intrepido ammazzavampiri, viene inviato da una società segreta, impegnata nella lotta contro il Male, in Transilvania, con il compito di uccidere il conte Dracula.','126 min');

//controllo degli oggetti
//var_dump($movie1);
//var_dump($movie2);


$movies = [
    $movie1,
    $movie2
]

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