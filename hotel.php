
<?php
//inserisco l'array degli hotel
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
    //var_dump($hotels);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container py-4">
    <!--Stampo a schermo gli hotel in una tabella-->
   <h1 class="mb-4">Hotels</h1> 
   <table class="table table-striped table-bordered align-middle">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //istruzioni che iterano per ogni hotel nell'array 
        /* creo uno squarcio di php cpn un ciclo foreach in modo da accedere ad ogni elemento dell'array, 
        non chiudo il foreach, quindi non chiudo la graffa, ma dopo il foreach vado a riaprire php con la chiusura 
        della graffa in modo che ad ogni riga venga associato l'elemento dell'array in modo dinamico. 
        Per stampare il valore utilizzo all'interno di php echo e l'elemento dell'array ciclato ovvero $hotel */
        foreach($hotels as $hotel){
        ?>
        <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?php echo $hotel['description']; ?></td>
            <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td> <!-- operatore ternario per stampare Sì o No in base al valore booleano -->
            <td><?php echo $hotel['vote']; ?></td>
            <td><?php echo $hotel['distance_to_center']; ?></td>
        </tr>
        <?php 
        }
        ?>

    </tbody>
   </table>
   </div>
   
</body>

</html>