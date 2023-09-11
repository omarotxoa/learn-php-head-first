<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alien Abduction Form</title>
</head>
<body>
    <form action="confirmation.php" method="post">

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required><br>

        <label for="email">What is your email address?</label>
        <input type="email" name="email" id="email" required><br>

        <label for="whenItHappened">When did it happen?</label>
        <input type="text" name="whenItHappened" id="whenItHappened" required><br>

        <label for="howLong">How long were you gone?</label>
        <input type="text" name="howLong" id="howLong" required><br>

        <label for="howMany">How many did you see?</label>
        <input type="text" name="howMany" id="howMany" required><br>

        <label for="alienDescription">Describe them:</label>
        <input type="text" name="alienDescription" id="alienDescription" required><br>

        <label for="whatTheyDid">What did they do to you?</label>
        <input type="text" name="whatTheyDid" id="whatTheyDid" required><br>

        <label for="fangSpotted">Have you seen my dog Fang?</label>
        Yes <input type="radio" name="fangSpotted" id="fangSpotted" value="yes" required>
        No <input type="radio" name="fangSpotted" id="fangSpotted" value="no" required><br>
        <img src="img/canela.jpg" width="250" height="175" alt="My abducted dog Fang."><br>
        <label for="other">Anything else you want to add?</label>
        <textarea name="other" id="other" cols="20" rows="10"></textarea><br>
        <input type="submit" value="Report Abduction" name="submit">
    </form>
</body>
</html>