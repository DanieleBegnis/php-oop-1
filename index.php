<!-- create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.-->

<?php 
require_once __DIR__ . '/Models/Movie.php';


$Movie = new Movie ('Tre uomini e una gamba', 'Tre uomini con una gamba di legno', 'Aldo, Giovanni e Giacomo e Massimo Venier', ['comico', 'avventura']);
$Movie2 = new Movie ('Fantozzi', 'Un povero ragioniere ne subisce di tutti i colori', 'Luciano Salce', ['comico', 'avventura']);
/* var_dump($Movie);
var_dump($Movie); */

$movies = [
    $Movie,
    $Movie2
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film italiani belli</title>
</head>
<body>
    <?php foreach($movies as $movie) { ?>
        <div>
            <div><?php echo $movie->getMovieDirector(); ?></div>
        </div>
    <?php } ?>
</body>
</html>