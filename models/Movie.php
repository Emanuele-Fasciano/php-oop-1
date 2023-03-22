<?php

class Movie
{
    // dichiaro le variabili d'istanza
    public $title;
    public $year;
    public $genre;

    // definisco il costruttore
    function __construct(
        string $_title,
        int $_year,
        string $_genre
    ) {
        $this->title = $_title;
        $this->setYear($_year);
        $this->genre = $_genre;
    }

    // definisco il metodo "setYear"
    public function setYear($year)
    {
        if (!is_int($year)) return false;
        $this->year = $year;
    }
}