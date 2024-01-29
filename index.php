<?php 

$chart = [];

if(file_exists('list.json')){
    $json = file_get_contents('list.json');
    $chart = json_decode($json);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Market Chart</title>
</head>
<body>
<div class="container">
<img src="assets/cat.png" alt="logo">
    <h1>Shopping Cart App</h1>
    <form action="newitem.php" method="post">
        <input type="text" name="item_name" id="mainInput" placeholder="Water">
        <button class="addBTN">Add</button>
    </form>
    <ul id="cart">
<?php 

    foreach( $chart as $itemName => $item){ ?>
        
        <li>
            <form action="delete.php" method="post">
            <input type="hidden" name="item_name" value="<?php echo $itemName?>">
            <button><?php echo $itemName?></button>
            </form>
        </li>

   <?php } ?>
   </ul>




   </div>
</body>
</html>