<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>

<form action="formdisplay.php" method="post">
    <label> Name</label><br>
    <label>Forename</label><input type="text" name="forename">
    <label>Surname</label><input type="text" name="surname"><br><br>
    <label>Gender</label><br><input type="radio" name="gender" value="male"><label>Male</label>
                         <br><input type="radio" name="gender" value="female"><label>Female</label>
    <br><br><label>Main Superhero Power</label><input type="text" name="power">
    <br><br><input type="submit" value="Submit">
</form>
</body>

</html>