<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà 

    Modificare la classe Movie in modo che accetti piú di un genere.-->

<?php

class Movie
{
    // dichiaro le variabili d'istanza
    public $title;
    public $year;
    public $genre;

    // definisco il costruttore
    function __construct($_title, $_year, $_genre)
    {
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

class Genre
{
}

// genero un array di oggetti (istanze)
$movies_array = [
    new Movie("Avatar", 2009, "Fantasy"),
    new Movie("Io sono leggenda", 2007, "Thriller"),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <!-- ciclo l'array e per ogni istanza genero un "ul" -->
        <?php foreach ($movies_array as $movie) : ?>
        <br>

        <!-- per ogni istanza nell' array stampo le proprietà -->
        <?php foreach ($movie as $detail) : ?>
        <li>
            <?= $detail ?>
        </li>
        <?php endforeach ?>
        <?php endforeach ?>
    </ul>
</body>

</html>