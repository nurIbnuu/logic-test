<?php
const XY = 9;
$star = '*';
$enter = "\n";
$space = ' ';

//      Logic 2

// Soal 1
echo 'Soal 1' . $enter;
for ($i = 1; $i <= XY; $i++) {
  for($j = 1; $j <= XY; $j++) {
    if ($i == $j) {
      echo ((2 * $i) - 1);
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
      echo ((2 * $j) - 2);
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
    if ($i == $j) {
      echo ((2 * $i - 1));
    } else if ($i + $j == 10) {
      echo ((2 * $j) - 2);
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
    if ($i == $j) {
      echo ((2 * $i - 1) );
    } else if ($i + $j == 10) {
      echo ((2 * $j) - 2);
    } else if ($i == 5) {
      echo ((2 * $j) - 2) . '  ';
    } else if ($j == 5) {
      echo ((2 * $i) - 1);
    } else {
      echo $space . '   ';
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
  for ($j = 1; $j <= XY; $j++) {
    if ($j <= $i) {
      printf('%2d ', ((2 * $j) - 1));
    } else {
      echo $space . ' ';
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
  for ($j = 1; $j <= XY; $j++) {
    if ($j + $i >= 10) {
      printf('%2d ', ((XY - $i) * 2));
    } else {
      echo $space . $space . ' ';
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
  for ($j = 1; $j <= XY; $j++) {
    if ($i == $j) {
      echo ((2 * $j) - 1);
    } else if ($i + $j == 10) {
      echo ((2 * $j) - 2);
    } else if ($j + $i <= 10 && $j >= $i) {
      echo 'A';
    } else if ($j + $i >= 10 && $j <= $i) {
      echo 'B';
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
  for ($j = 1; $j <= XY; $j++) {
    if ($i == $j) {
      echo ((2 * $j) - 1);
    } else if ($i + $j == 10) {
      echo ((2 * $j) - 2);
    } else if ($j + $i <= 10 && $j <= $i) {
      echo 'A';
    } else if ($j + $i >= 10 && $j >= $i) {
      echo 'B';
    } else {
      echo $space;
    }
  }
  echo $enter;
}
echo $enter;
echo $enter;
echo $enter;
