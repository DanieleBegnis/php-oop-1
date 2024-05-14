<?php


// classe movie
class Movie {
    public $name;
    public $plot;
    public $director;
    public $genre;

    //costruttore

    public function __construct($_name, $_plot, $_director,$_genre) {
        $this->name = $_name;
        $this->plot = $_plot;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public function getMovieDirector() {
        return $this->name . ' di ' . $this->director;
    }

    // public function getMovieGenre() {
    //     return $this->genre;
    // }
}
?>