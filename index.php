<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà 

    Modificare la classe Movie in modo che accetti piú di un genere.-->

<?php

include_once __DIR__ . "/models/Movie.php";
include_once __DIR__ . "/data/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Movies</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies_array as $movie) : ?>
                <div class="col-3 border me-3">
                    <p><strong>Title:</strong> <?= $movie->title ?></p>
                    <p><strong>Year: </strong><?= $movie->year ?></p>
                    <p><strong>Genre</strong>:</p>
                    <?php foreach ($movie->genre as $genre) : ?>
                        <ul>
                            <li><?= $genre ?></li>
                        </ul>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>