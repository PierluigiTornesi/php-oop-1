<?php 

//file dedicato ai dati con i due movie creati

$movie1 = new Movie('Io sono Leggenda',[4,8,9,10,6],['fantascienza', 'azione', 'drammatico', 'thriller', 'orrore'],"New York, 2012. Un misterioso virus ha ucciso quasi tutti gli uomini e li ha trasformati in vampiri. L'unico essere umano sopravvissuto al contagio è il dottor Robert Neville, che lotta disperatamente per trovare una cura.",'104 min');

$movie2 = new Movie('Van Helsing',[8,7,5,9,4],['azione', 'orrore', 'avventura', 'fantastico'],'Il professor Abraham Van Helsing , intrepido ammazzavampiri, viene inviato da una società segreta, impegnata nella lotta contro il Male, in Transilvania, con il compito di uccidere il conte Dracula.','126 min');

$movie3 = new Movie('Harry Potter and the Deathly Hallows - Part 2',[8,9,9,8,10],['fantastico', 'avventura', 'drammatico', 'azione'],'Harry, Ron e Hermione organizzano un furto alla Gringott, dove si trova nascosto uno degli Horcrux rimanenti. Nel corso dello scontro finale con Lord Voldemort potrebbe rivelarsi necessario un sacrificio.','130 min');

$movies = [
    $movie1,
    $movie2,
    $movie3
]

?>