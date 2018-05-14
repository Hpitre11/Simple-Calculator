<style>
  <?php
    include 'style.css';
  ?>
</style>

<?php

include 'methods.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculator = new Calc($num1, $num2, $cal);
echo "<p style='color: midnightblue;' id='final'>".$calculator->calcMethod()."</p>";

?>