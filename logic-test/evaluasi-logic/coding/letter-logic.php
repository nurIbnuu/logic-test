<?php
const ukuran = 5;
$outputHashtag = '#';
$outputSpasi = ' ';
$enter1kali = "\n";
$enter5Kali = "\n\n\n\n\n";

// MUHAMMAD NUR IBNU HUBAB

  // M
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if (($kolom == 1 || $kolom == 5) || ($baris == 2 && $kolom == 2) || ($baris == 3 && $kolom == 3) || ($baris == 2 && $kolom == 4)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // U
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris <= 4) || (($kolom <= 4 && $kolom >= 2) && $baris == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // H
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || $kolom == 5 || $baris == 3) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // A
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris >= 3) || $baris == 4 || ($baris == 2 && $kolom == 2) || ($baris == 2 && $kolom == 4) || ($baris == 1 && $kolom == 3)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // M
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || $kolom == 5 || ($baris == 2 && $kolom == 2) || ($baris == 3 && $kolom == 3) || ($baris == 2 && $kolom == 4)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // M
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || $kolom == 5 || ($baris == 2 && $kolom == 2) || ($baris == 3 && $kolom == 3) || ($baris == 2 && $kolom == 4)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // A
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris >= 3) || $baris == 4 || ($baris == 2 && $kolom == 2) || ($baris == 2 && $kolom == 4) || ($baris == 1 && $kolom == 3)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // D
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || ($kolom == 5 && $baris >= 2 && $baris <= 4) || (($baris == 1 || $baris == 5) && $kolom <= 4)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter5Kali;


  // N
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == $baris || $kolom == 1 || $kolom == 5) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // U
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris <= 4) || (($kolom <= 4 && $kolom >= 2) && $baris == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // R
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || (($baris == 1 || $baris == 3) && $kolom <= 4) || (($baris == 2 || $baris == 5) && $kolom == 5) || ($kolom == 4 && $baris == 4)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter5Kali;


  // I
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 3) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // B
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || (($baris == 1 || $baris == 3 || $baris == 5) && $kolom <= 4) || (($baris == 2 || $baris == 4) && $kolom == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // N
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == $baris || $kolom == 1 || $kolom == 5) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // U
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris <= 4) || (($kolom <= 4 && $kolom >= 2) && $baris == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter5Kali;


  // H
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || $kolom == 5 || $baris == 3) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // U
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris <= 4) || (($kolom <= 4 && $kolom >= 2) && $baris == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // B
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || (($baris == 1 || $baris == 3 || $baris == 5) && $kolom <= 4) || (($baris == 2 || $baris == 4) && $kolom == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // A
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ((($kolom == 1 || $kolom == 5) && $baris >= 3) || $baris == 4 || ($baris == 2 && $kolom == 2) || ($baris == 2 && $kolom == 4) || ($baris == 1 && $kolom == 3)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}
echo $enter1kali;

  // B
for ($baris = 1; $baris <= ukuran; $baris++) {
  for ($kolom = 1; $kolom <= ukuran; $kolom++) {
    if ($kolom == 1 || (($baris == 1 || $baris == 3 || $baris == 5) && $kolom <= 4) || (($baris == 2 || $baris == 4) && $kolom == 5)) {
      echo $outputHashtag;
    } else {
      echo $outputSpasi;
    }
  }
  echo $enter1kali;
}