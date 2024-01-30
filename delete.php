<?php

var_dump($_POST);


$json = file_get_contents('list.json');
$jsonArray = json_decode($json, true);
$itemName = htmlspecialchars($_POST['item_name']);


unset($jsonArray[$itemName]);

file_put_contents('list.json', json_encode($jsonArray, JSON_PRETTY_PRINT));



header('Location: index.php');