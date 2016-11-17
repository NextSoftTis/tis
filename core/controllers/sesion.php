<?php
// establishing the MySQLi connection
$con = mysqli_connect("localhost","root","","tis");

if (mysqli_connect_errno())
{
echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

// checking the user

if(isset($_POST['login'])){

$email= mysqli_real_escape_string($con,$_POST['user']);
$xpass = mysqli_real_escape_string($con,$_POST['pass']);
$sel_user = "select * from USUARIO where CUENTA_USUARIO='$email' AND CONTRASENIA_USUARIO='$xpass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['CUENTA_USUARIO']=$email;

echo "<script>window.open('http://localhost/tis/?view=secretaria')</script>";
}
else {
echo "<script>alert('Email or password is not correct, try again!')</script>";
}
}

?>

 