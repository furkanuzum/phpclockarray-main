<?php

function printArray($array)
{
  $length = count($array);
  for ($i = 0; $i < $length; $i++) {
    $length2 = count($array[$i]);
    for ($j = 0; $j < $length2; $j++) {
      $myNumber=$array[$j][$i];
      echo $myNumber . "\t";
    }
    echo "\n";
  }
}

  $x = 10;
  $y = 10;
  $myArray = array(); //boş matris
  $outerFrame = function ($matris, $step, $startNumber) use ($x, $y) //step kaçıncı çerçeve
  {
    $startX = $step;
    $endX = $x - $step - 1;

    $startY = $step;
    $endY = $y - $step - 1;
    for ($i = $startX; $i <= $endX; $i++) {
      $matris[$i][$startY] = $startNumber;
      $startNumber++;
    }
    for ($i = $startY + 1; $i <= $endY; $i++) {
      $matris[$endX][$i] = $startNumber;
      $startNumber++;
    }
    for ($i = $endX - 1; $i >= $startX; $i--) {
      $matris[$i][$endY] = $startNumber;
      $startNumber++;
    }
    for ($i = $endY - 1; $i >= $startY + 1; $i--) {
      $matris[$startX][$i] = $startNumber;
      $startNumber++;
    }
    return [$matris, $startNumber];
  };
  $myStartNumber = 0;
  $maximum = max($x, $y);
  $frameCount = ceil($maximum); //çerçeve sayısı belırle
  for ($i = 0; $i <= $frameCount; $i++) {
    [$myArray, $myStartNumber] = $outerFrame($myArray, $i, $myStartNumber);
  }
  printArray($myArray);
?>