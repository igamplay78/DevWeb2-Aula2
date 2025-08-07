<?php
$x = $_GET['num1'];  // Use $_GET['num1']
$y = $_GET['num2'];   // Use $_GET['num2']

if($x > $y) {
  echo "$x é maior que $y <br>";
}

if($x < $y) {
  echo "$x é menor que $y <br>";
}

if($x >= $y) {
  echo "$x é maior ou igual a $y <br>";
}

if($x <= $y) {
  echo "$x é menor ou igual a $y <br>";
}

if($x == $y) {
  echo "$x é igual a $y <br>";
}

if($x != $y) {
  echo "$x é diferente de $y <br>";
}

if($x <> $y) {
  echo "$x é diferente de $y <br>";
}

if($x === $y) {
  echo "$y é do mesmo tipo que $x <br>";
}

if($x !== $y) {
  echo "$y não é identico à $x <br>";
}

if($x <=> $y) {
  echo "$y é menor, igual, ou maior que $x <br>";
}
?>