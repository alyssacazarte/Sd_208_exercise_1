<!-- Write a PHP program to check the largest number among three given integers -->
<?php
function largest($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  if ($y >= $x && $y >= $z)
    $max = $y;
  if ($z >= $x && $z >= $y)
    $max = $z;
  
  echo "Largest number among three given integers $x, $y and $z is: $max\n";
}

largest(36, 24, 12);
?>