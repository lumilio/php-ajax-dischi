<?php

/* --------- richiesta api + restituice arrey a main.js  */

$obj = json_decode(file_get_contents('https://flynn.boolean.careers/exercises/api/array/music'), true);
header('Content-Type', 'application/json');
echo json_encode($obj);


?>