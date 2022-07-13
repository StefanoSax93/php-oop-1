<?php
/**
 * - è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

class Movie {
    public $title;
    public $year;
    public $director;
    public $genre;

    function __construct($_title, $_year, $_director, $_genre) {
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setDirector($_director);
        $this->setGenre($_genre);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getYear()
    {
        return $this-> year;
    }

    public function setYear($year)
    {
        $this->year = (int) $year;

        return $this;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function printCard() {
        $title = $this->getTitle();
        $year = $this->getYear();
        $director = $this->getDirector();
        $genre = $this->getGenre();

        echo    "<div class='card p-3 border border-5 border-danger h-100'>
                    <h2>$title</h2>
                    <p>Anno: <strong>$year</strong></p>
                    <p>Regista: <strong>$director</strong></p>
                    <p>Genere: <strong>$genre</strong></p>
                </div>";
    }
}
