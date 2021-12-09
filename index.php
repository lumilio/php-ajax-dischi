<?php

/* $obj = json_decode(file_get_contents('https://flynn.boolean.careers/exercises/api/array/music'));
echo var_dump($obj); */

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
                                    <option v-for="genere in GeneriArrey" :key='genere.id' :value="genere">{{genere}}</option> <!------------------------- loop  -->
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="container">
                            <form>
                                <label class="text-white">Search for Artist :</label>
                                <select v-model="selected2" @change="showCD(selected2)">
                                    <option value="All" select>All</option>
                                    <option v-for="Card in CardArreyChild" :key='Card.id' :value="Card.author" > {{Card.author}}</option> <!------------------------- loop  -->
                                </select>
                            </form>
                        </div>
                    </div>
                    <button @click="Research()" >Esegui ricerca</button>

                </div>

                <!-- ***********  cards  *********** -->

                <div v-if='loaded == true' class="Cardbox">         <!------------------------- loop  -->                               
                    <div class="card-model">
                        <img :src="poster" alt="">
                        <h4>{{title.toUpperCase()}}</h4>
                        <span>{{author}}</span>
                        <span>{{year}}</span>
                    </div>
                </div>
                <div v-else class='loading-box'>
                    <h3>Loading...</h3>
                </div>


            </div>
        </div>
    </main>
</body>
</html>