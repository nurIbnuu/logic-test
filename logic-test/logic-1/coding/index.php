<?php
const XY = 9;
$star = '*';
$enter = "\n";
$space = ' ';

// Intro
// for ($i = 1; $i <= XY; $i++) {
//   for ($j = 1; $j <= XY; $j++) {
//     echo $star;
//     }
//   echo $enter;
// }

//    Logic 1

// Soal 1
echo 'Soal 1' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i == $j) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 2
echo 'Soal 2' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i + $j == 10) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 3
echo 'Soal 3' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i == $j || $i + $j == 10) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 4
echo 'Soal 4' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i == $j || $i + $j == 10 || $i == 5 || $j == 5) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 5
echo 'Soal 5' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($j <= $i) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 6
echo 'Soal 6' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i + $j >= 10) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 7
echo 'Soal 7' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if (($i + $j <= 10 && $j >= $i) || ($j + $i >= 10 && $j <= $i)) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;


// Soal 8
echo 'Soal 8' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if (($i + $j <= 10 && $j <= $i) || ($j + $i >= 10 && $j >= $i)) {
      echo $star;
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;