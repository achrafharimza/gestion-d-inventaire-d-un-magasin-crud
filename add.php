<?php
require_once 'connection.php';


if(isset($_POST["add"]) ){
    
   


$name= $_POST["namea"];
$price=$_POST["price"];
$expiration_Date=$_POST["expiration_Date"];
$brand=$_POST["brand"];
$category=$_POST["category"];
$stock=$_POST["stock"];




$sql = "INSERT INTO produit (namep, price, expirationd,Brand,category, stock) 
VALUES
('$name', '$price', '$expiration_Date', '$brand', '$category', '$stock')";
$con->query($sql);
header("location: index.php");

}



?>