<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="calculate.php" method="post">
    <label for="first_number">First Number: </label>
    <input type="text" name="first-number" placeholder="First Number" />

    <label for="seconds_number">Second Number: </label>
    <input type="text" name="second-number" placeholder="Seconds Number" />

    <button type="submit" name="btn-get-sum">Get Sum</button>
  </form>
</body>
</html>