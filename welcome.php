<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $dob = $_POST["dob"];

    $birthDate = strtotime($dob);
    $today = time();
    $age = floor(($today - $birthDate) / 31536000);

    echo "Welcome $name, currently your age is $age years.";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Age Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <h1>Age Calculator</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob"><br><br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>