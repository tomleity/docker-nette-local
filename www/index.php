
<?php
$servername = "mysql:3306";
$username = "nette";
$password = "nette";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("<center>Connection failed: " . mysqli_connect_error() . "<center>");
}
echo "<center>Connected successfully</center>";


phpinfo();


