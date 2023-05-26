<?php
$name = $_POST["fname"];
$email = $_POST["email"];
$num = $_POST["num"];
$subject = $_POST["sub"];
$message = $_POST["msg"];

$query = mysqli_query($connet, "Insert into contacts (Name, Email, Number, Subject, Message) values ('$name','$email','$num','$subject','$message')");

if($query){
    echo "<script>alert('Sucess')</script>";
}else{
    echo "<script>alert('Error')</script>";
}
?>