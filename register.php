<?php

mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("nameofdb") or die (mysql_error());

if(isset($_POST['Register']))
{
    $name = $_POST['Name'];
    $last = $_POST['Surname'];
    $user = $_POST['Username'];
    $pass = $_POST['Password'];
}

if (strlen($_POST['Password']) >= 8)
{
  // more than eight chars entered !!
}

$password = new Password();
$password->setMaxLength(3);
$password->validatePassword('password');

$password = new Password(array(
    'minLength'      => 8,
    'maxLength'      => 30,
    'minNumbers'     => 0,       
    'minLetters'     => 0,
    'minLowerCase'   => 0,
    'minUpperCase'   => 0,
    'minSymbols'     => 0,
    'maxSymbols'     => 0,

));


$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

$name = $_POST['name'];
echo "<h3> Hello $name </h3>";


?>