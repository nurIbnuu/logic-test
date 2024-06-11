document.write("<h1>Tes Logika</h1>");

let xy = 9,
    star = "*",
    enter = "<br>"
    space1Kali = '&nbsp',
    space2Kali = "&nbsp&nbsp";

document.write("<h3>Intro</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    document.writeln(star + "&nbsp");
  }
  document.write(enter);
}
document.write(enter);


document.write("<h2>Logic 1</h2>");

document.write("<h3>Soal 1</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y) {
      document.writeln(star);
    } else        {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 2</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x + y - 1 == xy) { // atau (x + y == 10)
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 3</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y || x + y - 1 == xy) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 4</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y || x + y - 1 == xy || x == 5 || y == 5) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 5</h3>");
// for (let y = 1; y <= xy; y++) {
//   for (let x = 1; x <= y; x++) { // atau (x < y)
//       document.writeln(star);
//   }
//   document.write(enter);
// } ATAU
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x <= y) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 6</h3>");
// for (let y = 1; y <= xy; y++) {
//   for (let space1 = 1; space1 <= (xy - y); space1++) {
//     document.writeln(space2Kali);
//   }
//   for (let x = 1; x <= y; x++) {
//       document.writeln(star);
//   }
//   document.write(enter);
// } ATAU
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x + y >= 10) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 7</h3>");
// let keBarisTengah = 5;
// for (let y = 1; y <= keBarisTengah; y++) {
//   let space2 = '';
//   for (let x = 1; x <= (y - 1); x++) {
//     space2 += space2Kali + space1Kali;
//     }
//   let star1 = '';
//   for (let x2 = 1; x2 <= (xy - (y - 1) * 2); x2++) {
//     star1 += star + space1Kali;
//   }
//   document.writeln(space2 + star1 + enter);
// } ATAU
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if ((x + y <= 10 && x >= y) || (x + y >= 10 && x <= y)) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.writeln(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 8</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if ((x + y <= 10 && x <= y) || (x + y >= 10 && x >= y)) {
      document.writeln(star);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.writeln(enter);
}