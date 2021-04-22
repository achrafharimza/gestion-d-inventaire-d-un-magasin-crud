<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "youssef";
$dbname = "crud";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
$id=0;
$name= "";
$price="";
$expiration_Date="";
$brand="";
$category="";
$stock="";
$edit = false;


if (isset($_GET['del'])) {
	
	
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM produit WHERE id=$id");
	
	header('location: index.php');
}

//edit

if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$edit = true;
		$result = mysqli_query($con, "SELECT * FROM produit WHERE id=$id");

			$n = mysqli_fetch_array($result);

$name= $n["namep"];
$price=$n["price"];
$expiration_Date=$n["expirationd"];
$brand=$n["brand"];
$category=$n["category"];
$stock=$n["stock"];
	}

	if (isset($_POST['update'])) {
	
	$id = $_POST['id'];
$name= $_POST["namea"];
$price=$_POST["price"];
$expiration_Date=$_POST["expiration_Date"];
$brand=$_POST["brand"];
$category=$_POST["category"];
$stock=$_POST["stock"];





	mysqli_query($con, "UPDATE produit SET namep='$name', price='$price', expirationd='$expiration_Date', brand='$brand', category='$category', stock='$stock' WHERE id=$id");
	
	header('location: index.php');
}