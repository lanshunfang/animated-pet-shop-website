<?php

$date    = date("Y-m-d H:i:s");
$fname   = $_POST["fname"];
$lname   = $_POST["lname"];
$address = $_POST["address"];
$city    = $_POST["city"];
$state   = $_POST["state"];
$zip     = $_POST["zip"];
$phone   = $_POST["phone_number"];
$email   = $_POST["emailaddress"];
$pettype = $_POST["pettype"];

if ($pettype == "dog") {
	$breed = $_POST["breed"];
}

$pname = $_POST["pname"];
$age   = $_POST["age"];

$connect = mysqli_connect("localhost", "root", "pwdpwd", "pet_shop");

$query = "INSERT INTO `GROOMING` VALUES('','$fname','$lname','$address','$city','$state','$zip','$phone','$email','$pettype','$breed','$pname','$age','$date')";

$result = mysqli_query($connect, $query);

if (!$result) {
	printf("Error:%s\n", mysqli_error($connect));
	exit();}

?>