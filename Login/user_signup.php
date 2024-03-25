<?php
$connection = mysqli_connect("localhost", "root", "","fb"); 
$n4 = $_POST["email"];
$n5 = $_POST["password"];
$n6 = $_POST["cpassword"];

$query = mysqli_query($connection, "INSERT INTO user ( email, password,cpassword) VALUES ( '$n4', '$n5', '$n6')");

if($query)
{
header("location: login.php");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

mysqli_close($connection); // Closing Connection with Server
?>