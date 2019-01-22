<?php

    $personsStr =  file_get_contents('http://localhost:8888/web_service/personne_service.php');
    $persons = json_decode($personsStr,true);?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TAB DAO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <table class="table is-bordered is-striped is-hoverable ">
        <tr>
            <th>#</th>
            <th>PRENOM</th>
            <th>NOM</th>
            <th>SEXE</th>

        </tr>
        <?php foreach($persons as $pers) : ?>
        <tr>
            <td><?= $pers['id']?></td>
            <td><?=$pers['first_name']?></td>
            <td><?=$pers['last_name']?></td>
            <td><?=$pers['gender']?></td>

        </tr>
        <?php endforeach?>
    </table>
</body>
</html>

