<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message =$_POST['message'];


// Database connection


$conn = new mysqli('localhost','root','','pp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
 $stmt = $conn->prepare("Insert into Form1 (firstName, lastName, mail, phone, message) values (?,?,?,?,?)");

 $stmt->bind_param ("sssis", $firstname, $lastname, $mail, $phone, $message);

 $execval = $stmt -> execute ();
 echo $execval;
 echo "Registration successfully.......";

 $stmt->close();
 $conn->close();
}

 ?>
