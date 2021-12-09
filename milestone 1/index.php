<?php

$obj = json_decode(file_get_contents('https://flynn.boolean.careers/exercises/api/array/music'), true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel='stylesheet' href="main.css">
</head>
<body>
    <header>
        <div class="container-fluid d-flex justify-content-center">
            <div class="container">
                <img src="img/logo.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid d-flex justify-content-center">
            <div class="container d-flex align-items-center flex-column">

                <!-- ***********  form  *********** -->

                <div class="box-form container">
                    <div class="container-fluid d-flex justify-content-center">     
                        <div class="container">
                            <form>
                                <label class="text-white">Search for Type :</label>
                                <select v-model="selected1" @change="showCD(selected1)">
                                    <option value="All" select>All</option>
                                    <?php foreach ($obj["response"] as $card) : ?>
                                        <option class="<?=$card != $card ? '' : 'd-none'?>" value="<?= $card['genre']; ?> "><?= $card['genre']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- ***********  cards  *********** -->

                <div class="Cardbox">         <!------------------------- loop  -->                               
                    <?php foreach ($obj["response"] as $card) : ?>
                        <div class="card-model">
                            <img src="<?= $card['poster']; ?>" alt="">
                            <h4><?= strtoupper($card['title']); ?></h4>
                            <span><?= $card['author']; ?></span>
                            <span><?= $card['year']; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>



            </div>
        </div>
    </main>
</body>
</html>


<?php



 



?>