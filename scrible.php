<!-- <?php
for ($i = 1; $i<100; $i++) {
  $c=0;
  for ($j = 2; $j<$i; $j++) {
    if ($i % $j == 0) {
      $c++;
    }
  }
  if ($c==0){
    echo $i . " ";
  }
}
?> -->

<!-- <?php
function isPalindrome($str) {
  $str = strtolower($str);
  $end = strlen($str);
  for ($start = 0; $start < $end; $start++) {
    if ($str[$start] !== $str[$end -1]){
      return false;
    }
    $end--;
  }
  return true;
}
if (isPalindrome("rotator")){
  echo "Palindrome";
}else{
  echo "Not Palindrome";
}
?> -->

<!-- <?php
$a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

foreach ($a as $key => $value) {
  echo "Key: $key, Value: $value <br>";
}
?> -->

<!-- <html>
  <head></head>
  <body>
    <?php
    echo "Hello World!"
    ?>
  </body>
</html> -->

<!-- <html>
<head></head>
<body>
  <form action="index.php" method="GET">
    <input name= "name" type="text" placeholder="Enter a city name" />
  </form>
</body>
</html> -->

<!-- <html>
<head></head>
<body>
  <form method="POST">
    <input name="name" type="text" placeholder="Enter the city name: "/>
    <button type="submit">Submit</button>
  </form>

  <?php
  if (isset($_POST['name'])) {
    echo $_POST['name'];
  }
  ?>
</body>
</html> -->

<!-- <html>
<head></head>
<body>
  <form method="POST">
    <input name="name" type="text" placeholder="Enter a day: "/>
  </form>
  <?php
  if(isset($_POST['name'])){
    $day = strtolower($_POST['name']);

    if ($day == 'monday'){
      echo "Laugh on Monday, laugh for danger";
    }
    elseif ($day == 'tuesday'){
      echo "Laugh on Tuesday, smile at a stranger";
    }
    elseif ($day == 'wednesday'){
      echo "Laugh on Wednesday, laugh for a letter";
    }
    elseif ($day == 'thursday'){
      echo "Laugh on thursday, something better";
    }
    elseif ($day == 'friday'){
      echo "Laugh on Friday, laugh for sorrow";
    }
    elseif ($day == 'saturday'){
      echo "Laugh on Saturday, joy tomorrow";
    }
    else{
      echo "Invalid!";
    }
  }
  ?>
</body>
</html> -->

<!-- <?php
$cities = array("Kathmandu", "Tokyo", "Mexico City", "New York
City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires",
"Cairo, London");
//this seperates by comma
foreach($cities as $city){
  echo "$city, ";
  }

sort($cities);

echo "<ul>";
foreach($cities as $city) {
echo "<li> $city </li>";
}
echo "</ul>";

$new_cities = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
$cities = array_merge($cities, $new_cities);

echo "<ul>";
foreach($cities as $city) {
echo "<li> $city </li>";
}
echo "</ul>";
?> -->


<!-- <html>
<body>
  <form method='post'>
    <label for='city'>Select a city &nbsp;</label>
    <select name='city' id='city'>
      <option value='' disabled selected>Select a city</option>
      <option value='Kathmandu'>Kathmandu</option>
      <option value='Tokyo'>Tokyo</option>
      <option value='Mexico City'>Mexico City</option>
      <option value='New York City'>New York City</option>
      <option value='Mumbai'>Mumbai</option>
      <option value='Seoul'>Seoul</option>
      <option value='Shanghai'>Shanghai</option>
      <option value='Lagos'>Lagos</option>
      <option value='Buenos Aires'>Buenos Aires</option>
      <option value='Cairo'>Cairo</option>
      <option value='London'>London</option>
    </select>
    <button type='submit'>Submit</button>
  </form>

  <?php
  $cities = array(
    "Kathmandu" => "Nepal",
    "Tokyo" => "Japan",
    "Mexico City" => "Mexico",
    "New York City" => "USA",
    "Mumbai" => "India",
    "Seoul" => "Korea",
    "Shanghai" => "China",
    "Lagos" => "Nigeria",
    "Buenos Aires" => "Argentina",
    "Cairo" => "Egypt",
    "London" => "England"
  );

  if (isset($_POST['city'])) {
    $selected_city = $_POST['city'];
    foreach ($cities as $city => $country) {
      if ($city == $selected_city) {
        echo "$city is in $country";
      }
    }
  }
  ?>
</body>
</html> -->


<!-- <html>
<head></head>
<body>
  <form method="post">
    <input type='text' name='username' placeholder="Enter username..."/><br /><br />
    <input type='password' name='password' placeholder="Enter password..."/><br /><br />
    <input type="submit">
  </form>
  <?php
  session_start();
  function is_authenticated($username, $password){
    return $username === 'admin' && $password === 'pass123';
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
  }
  if (is_authenticated($username, $password)){
    $_SESSION['user'] = $username;
    header("Location: /dashboard");
    exit();
  }
  else{
    echo "Incorrect username or password";
  }
  ?>
</body>
</html> -->

<!-- <?php
function areaOfRectangle($width, $height){
  $area = $width * $height;

  return "A rectangle of length $width and width $height has an area of $area.";
}
$width = 20;
$height = 10;
$result = areaOfRectangle($width, $height);

echo $result
?> -->


<!-- <html>
<body>
  <form method="post">
    <p>Please enter the values of the length and width of your rectangle.</p>
    <input type="text" placeholder="Enter length.." name="length" id="length" required>
    <br><br>
    <input type="text" placeholder="Enter width.." name="width" id="width" required>
    <br><br>
    <input type="submit" value="Calculate Area">
  </form>
</body>
</html>
<?php

function area($width, $height){
  $area = $width * $height;
  return "A rectangle of length $width and width $height has an area of $area.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $length = $_POST['length'];
  $width = $_POST['width'];
}
if (is_numeric($length) && is_numeric($width)){
  echo area($length, $width);
}
else{
  echo "Invalid Input";
}

?> -->

<!-- <?php
$json = '[
    {"name": "John Garg", "age": 15, "school": "Ahlcon Public School"},
    {"name": "Smith Soy", "age": 22, "school": "St. Marie School"},
    {"name": "Charle Rena", "age": 16, "school": "St. Columbia School"}
]';
$data = json_decode($json, true);
?>

<html>
<head>
    <style>
        * {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>School</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $person): ?>
                <tr>
                    <td><?php echo $person['name']; ?></td>
                    <td><?php echo $person['age']; ?></td>
                    <td><?php echo $person['school']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html> -->

