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

//mi richiamo il valore selezionato del parcheggio dal FORM
$parking_available = $_GET['parking_available'];

var_dump($parking_available);


//mi richiamo il valore selezionato del voto dal FORM
$vote_rating = intval($_GET['vote_rating']); //la funzione intval() converte il valore in numero

var_dump($vote_rating);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

            echo '<br>'
            ?>
            <div class="ps-4">
                <h3>Nome Hotel: <?php echo $name_hotel; ?></h3> <!-- Metodo di scrittura classico con "echo" -->
                <p>Descrizione Hotel: <?= $description_hotel; ?></p> <!-- Metodo di scrittura con shortcut "=" che mi sostituisce "php echo" all'interno del tag php stesso -->
                <p>Parcheggio Hotel: <?= $parking_hotel; ?></p>
                <p>Voto Hotel: <?= $vote_hotel; ?></p>
                <p>Distanza Hotel dal Centro: <?= $distance_hotel; ?> Km</p>
            </div>
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


        

        <!-- Aggiungo tutto in una table -->
        <div class="p-4">
            
            <!-- BONUS 1 + 2: Applico il form -->
            <form action="">
                <div>
                    <label for="parking_available">Disponibilità Parcheggio:</label>
                    <select name="parking_available" id="">
                        <option value="0" selected>Seleziona Parcheggio</option>
                        <option value="1">Parcheggio Disponibile</option>
                        <option value="2">Parcheggio Non Disponibile</option>
                    </select>
                </div>

                <div>
                    <label for="vote_rating">Punteggio Hotel:</label>
                    <select name="vote_rating" id="">
                        <option value="0" selected>Seleziona Voto</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <button class="btn btn-dark">Invio</button>
            </form>

            <br>

            <table class="table border">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Nome Hotel</th>
                        <th scope="col">Descrizione Hotel</th>
                        <th scope="col">Parcheggio Hotel</th>
                        <th scope="col">Voto Hotel</th>
                        <th scope="col">Distanza dal Centro (Km)</th>
                    </tr>
                </thead>

                <!-- creo un ciclo for per scorrere l'array, sfruttando la funzione count($array) per la lunghezza -->
                <?php for($i = 0; $i < count($hotels); $i++) {?>
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
                    <tbody class="text-center">
                        <!-- sfrutto il ternario per indicare le condizioni di disponibilità parcheggio & il voto dell'hotel-->
                        <tr class="
                            <?= $parking_hotel === true && $parking_available === '2' || $vote_rating !== $vote_hotel || $parking_hotel === false && $parking_available === '1' || $vote_rating !== $vote_hotel ? 'd-none' : ''; ?>
                            ">
                            <td scope="row"><?= $name_hotel; ?></td>
                            <td><?= $description_hotel; ?></td>

                            <!-- creo una condizione per cui stampare in tabella se il parcheggio è disponibile o meno -->
                            <td>
                                <?php 
                                    if($parking_hotel === true){
                                      echo '<span style="color: rgb(20, 176, 20);"> &#10003; </span>';
                                    } else {
                                        echo '<span style="color: rgb(255, 0, 0);"> &#10007; </span>';
                                    }
                                ?>
                            </td>
                            <td><?= $vote_hotel; ?>/5</td>
                            <td><?= $distance_hotel; ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>

            
    </main>


</body>

</html>