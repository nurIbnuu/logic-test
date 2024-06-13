document.write("<h1>Tes Logika</h1>");

let xy = 9,
    enter = "<br>"
    space1Kali = '&nbsp',
    space2Kali = "&nbsp&nbsp";


document.write("<h2>Logic 2</h2>");

document.write("<h3>Soal 1</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y) {
      document.writeln(2 * x - 1);
    } else        {
            document.writeln(space2Kali + space1Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 2</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x + y == 10) {
      document.writeln(2 * x - 2);
    } else        {
            document.writeln(space2Kali + space1Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 3</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y) {
      document.writeln(2 * x - 1);
    } else if (x + y == 10) {
      document.writeln(2 * x - 2);
    } else {
            document.writeln(space2Kali + space1Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 4</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if ((x == y || (x == 5))) {
      document.writeln((2 * y) - 1);
    } else if ((x + y == 10) || (y == 5)) {
      document.writeln((2 * x) - 2 + space1Kali);
    } else {
      document.writeln(space2Kali + space1Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 5</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x <= y) {
      document.writeln(2 * x - 1);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 6</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x + y >= 10) {
      document.writeln((xy - y) * 2);
    } else {
      document.writeln(space2Kali);
    }
  }
  document.write(enter);
}
document.write(enter);
document.write(enter);


document.write("<h3>Soal 7</h3>");
for (let y = 1; y <= xy; y++) {
  for (let x = 1; x <= xy; x++) {
    if (x == y) {
      document.writeln(2 * x - 1);
    } else if (x + y == 10) {
      document.writeln(2 * x - 2);
    } else if (x + y <= `10` && x >= y) {
      document.writeln('A');
    } else if (x + y >= 10 && x <= y) {
      document.writeln('B');
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
    if (x == y) {
      document.writeln(2 * x - 1);
    } else if (x + y == 10) {
      document.writeln(2 * x - 2);
    } else if (x + y <= 10 && x <= y) {
      document.writeln('A');
    } else if (x + y >= 10 && x >= y) {
      document.writeln('B' + space1Kali);
    } else {
      document.writeln(space2Kali + space1Kali);
    }
  }
  document.writeln(enter);
}
document.write(enter);
document.write(enter);

