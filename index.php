<!-- create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
// classe movie
class Movie {
    public $name;
    public $plot;
    public $director;

    //costruttore

    public function __construct($_name, $_plot, $_director) {
        $this->name = $_name;
        $this->plot = $_plot;
        $this->director = $_director;
    }

    public function getMovieDirector() {
        return $this->name . ' di ' . $this->director;
    }
}

?>