<?php
if(isset($_POST['submit'])) {
  $name = strtolower($_POST['name']);
  $date = $_POST['date'];
  $color = strtolower($_POST['color']);
  $food = strtolower($_POST['food']);
  $secret = $_POST['secret'];

  // Check if all fields are filled correctly
  if($name == 'jangmu' && $date == '2022-09-08' && $color == 'black' && $food == 'panipuri' && $secret == '0506') {
    header('Location: https://jangmu.vercel.app/'); // redirect to success page
    exit();
  } else {
    echo '<p style="font-family:"sans-serif";>Sorry, milena 😭. Feri try gara. Kei hunna</p>';
  }
}
?>
