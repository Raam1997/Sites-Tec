<?php


if(isset($_POST['common-btn'])){
$to = "stiestec@gmail.com";
$name = $_POST['name'];
$Messege = $_POST['Messege'];
$from = $_POST['from'];
$headers = "From:" . $from;
mail($to,$subject,$Message,$headers);
}

?>