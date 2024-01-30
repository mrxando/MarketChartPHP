<?php
$itemname = htmlspecialchars($_POST['item_name']) ?? '';
$itemname = trim($itemname);

if($itemname){
    if(file_exists('list.json')){
        $json = file_get_contents('list.json');
        $jsonArray = json_decode($json, true);
    }
    else {
        $jsonArray = [];
    }
$jsonArray[$itemname] = [$itemname];

   file_put_contents('list.json',json_encode($jsonArray,JSON_PRETTY_PRINT));

}


header('Location: index.php');