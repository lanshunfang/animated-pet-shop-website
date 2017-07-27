<?php

$cname    = $_POST["contactname"];
$caddress = $_POST["contactadress"];
$ceamil   = $_POST["contactemail"];
$comments = $_POST["comments"];

$connect = mysqli_connect("localhost", "root", "pwdpwd", "pet_shop");

$query = "INSERT INTO `CONTACT` VALUES('$cname','$caddress','$ceamil','$comments')";

$result = mysqli_query($connect, $query);

if (!$result) {
	printf("Error:%s\n", mysqli_error($connect));
	exit();
}

?>