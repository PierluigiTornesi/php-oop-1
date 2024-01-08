<?php 
//file per la classe movie


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

?>