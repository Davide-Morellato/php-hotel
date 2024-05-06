<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=“https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css” rel=“stylesheet” integrity=“sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH” crossorigin=“anonymous”>
    <title>PHP_HOTELS</title>
</head>

<body>
    <main>
    <!--MODO 1:
        creo un ciclo for per scorrere l'array, sfruttando la funzione count($array) per la lunghezza -->

        <?php for ($i = 0; $i < count($hotels); $i++) { ?>
            <?php
            //prendo il singolo elemento dell'array
            $hotel = $hotels[$i];
            //prendo ogni singolo valore dell'array
            $name_hotel = $hotel['name'];
            $description_hotel = $hotel['description'];
            $parking_hotel = $hotel['parking'];
            $vote_hotel = $hotel['vote'];
            $distance_hotel = $hotel['distance_to_center'];
            ?>
            <h3>Nome Hotel: <?php echo $name_hotel; ?></h3> <!-- Metodo di scrittura classico con "echo" -->
            <p>Descrizione Hotel: <?= $description_hotel; ?></p> <!-- Metodo di scrittura con shortcut "=" che mi sostituisce "php echo" all'interno del tag php stesso -->
            <p>Parcheggio Hotel: <?= $parking_hotel; ?></p>
            <p>Voto Hotel: <?= $vote_hotel; ?></p>
            <p>Distanza Hotel dal Centro: <?= $distance_hotel; ?> Km</p>
        <?php } ?>


        <!-- MODO 2: creo un ciclo for per scorrere l'array, sfruttando la funzione count($array) per la lunghezza -->
        <!-- <?php

        for ($i = 0; $i < count($hotels); $i++) {

            //prendo il singolo elemento dell'array
            $hotel = $hotels[$i];

            //prendo ogni singolo valore dell'array
            $name_hotel = $hotel['name'];
            $description_hotel = $hotel['description'];
            $parking_hotel = $hotel['parking'];
            $vote_hotel = $hotel['vote'];
            $distance_hotel = $hotel['distance_to_center'];
        ?>
            <div>
                <h3>
                    Nome Hotel: <?php echo $name_hotel; ?>
                </h3>
                <p>
                    Descrizione Hotel: <?php echo $description_hotel; ?>
                </p>
                <p>
                    Parcheggio Hotel: <?php echo $parking_hotel; ?>
                </p>
                <p>
                    Voto Hotel: <?php echo $vote_hotel; ?>
                </p>
                <p>
                    Distanza dal Centro: <?php echo $distance_hotel; ?> Km
                </p>
            </div>
        <?php
        }
        ?> -->
    </main>


</body>

</html>