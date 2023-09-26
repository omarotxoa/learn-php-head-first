<?php 

// connect to the db

// insert form data

$form_data = $_POST;

var_dump($form_data);

$email = $_POST['email'];
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];

echo '<pre>';
print_r($email) . '<br>';
print_r($first_name) . '<br>';
print_r($last_name) . '<br>';
echo '</pre>'; 