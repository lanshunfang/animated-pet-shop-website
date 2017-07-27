<?php
//connect to database
$connect = mysqli_connect("localhost", "root", "pwdpwd", "pet_shop");

$input = filter_input_array(INPUT_POST);

$fname   = mysqli_real_escape_string($connect, $input["fname"]);
$lname   = mysqli_real_escape_string($connect, $input["lname"]);
$address = mysqli_real_escape_string($connect, $input["address"]);
$city    = mysqli_real_escape_string($connect, $input["city"]);
$zip     = mysqli_real_escape_string($connect, $input["zip"]);
$phone   = mysqli_real_escape_string($connect, $input["phone_number"]);
$email   = mysqli_real_escape_string($connect, $input["emailaddress"]);
$pettype = mysqli_real_escape_string($connect, $input["pettype"]);
$breed   = mysqli_real_escape_string($connect, $input["breed"]);
$pname   = mysqli_real_escape_string($connect, $input["pname"]);
$age     = mysqli_real_escape_string($connect, $input["age"]);

if ($input["action"] === 'edit') {
	$query = "
 UPDATE GROOMING
 SET fname = '".$fname."',
 lname = '".$lname."',
  address = '".$address."',pettype
   city = '".$city."',
    zip = '".$zip."',
     phone = '".$phone."',
      email = '".$email."',
       pettype = '".$pettype."',
        breed = '".$breed."',
         pname = '".$pname."',
          age = '".$age."',



 WHERE id = '".$input["id"]."'
 ";

	mysqli_query($connect, $query);

}
if ($input["action"] === 'delete') {
	$query = "
 DELETE FROM GROOMING
 WHERE id = '".$input["id"]."'
 ";
	mysqli_query($connect, $query);
}

echo json_encode($input);

?>