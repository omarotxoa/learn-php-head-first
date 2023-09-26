<?php 

// connect to the db
$db = new mysqli('localhost', 'root', '', 'elvis_store');

// insert form data

$form_data = $_POST;

$email = $_POST['email'];
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];

$sql =  "INSERT INTO email_list(first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
 
$result = mysqli_query($db, $sql)
    or die('Error querying db');

mysqli_close($db);

header('Location: addemail.html');
