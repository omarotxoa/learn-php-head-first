<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
</head>
<body>
    <?php
        $when_it_happened = $_POST['whenItHappened'];
        $how_long = $_POST['howLong'];
        $alien_description = $_POST['alienDescription'];
        $fang_spotted = $_POST['fangSpotted'];
        $email = $_POST['email'];
        $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
        $how_many = $_POST['howMany'];
        $what_they_did = $_POST['whatTheyDid'];
        $other = $_POST['other'];
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $what_they_did = $_POST['whatTheyDid'];

        $to = 'email@test.com';
        $subject = 'Aliens Abducted Me - Abduction Report';
        $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
            "Number of aliens: $how_many\n" .
            "Alien description: $alien_description\n" .
            "What they did: $what_they_did\n" .
            "Fang spotted: $fang_spotted\n" .
            "Other comments: $other";
        mail($to, $subject, $msg, 'From:' . $email);
        
        echo 'Thanks for submitting the form.<br>';
        echo 'You were abducted ' . $when_it_happened;
        echo ' and were gone for ' . $how_long . '<br>';
        echo 'Number of aliens: ' . $how_many . '<br>';
        echo 'Describe them: ' . $alien_description . '<br>';
        echo 'The aliens did this: ' . $what_they_did . '<br>';
        echo 'Was Fang there? ' . $fang_spotted . '<br>';
        echo 'Other comments: ' . $other . '<br>';
        echo 'Your email address is ' . $email;

        $dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase')
            or die('Error connecting to MySQL server.');

        $query = 
        "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_many, alien_description, what_they_did, fang_spotted, other, email, how_long) " .
        "VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email', '$how_long')";

        $result = mysqli_query($dbc, $query)
            or die('Error querying database.');

        mysqli_close($dbc); 

    ?>

</body>
</html>