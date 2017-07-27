<?php

session_start();
header("Content-type:text/html;charset=utf-8");

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == '' || $password == '') {
	echo "<script>alert('username or password is empty!');
    window.location.href='login.php';
</script>";
	exit;
}

$connect = mysqli_connect("localhost", "root", "pwdpwd", "pet_shop");

$sql = "select * from users where user='{$username}' and pass='{$password}'";
//select * from admin where user_name='admin' and pass_word='admin';
$res = mysqli_query($connect, $sql);
$row = mysqli_num_rows($res);
if (!$row) {
	echo "<script>alert('Username or Password is Incorrect!');
    window.location.href='login.php';
</script>";
	exit;
} else {
	echo "<script>alert('Login Successfully!');
    window.location.href='index.php';
</script>";
	exit;
}

?>