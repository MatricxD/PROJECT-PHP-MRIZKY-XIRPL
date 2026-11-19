<?php

// 1. Operator Aritmatika

$a = 5;
$b = 2;

$c = $a + $b;
print "$a + $b = $c";
print "<br>";

$c = $a - $b;
print "$a - $b = $c";
print "<br>";

$c = $a * $b;
print "$a * $b = $c";
print "<br>";

$c = $a / $b;
print "$a / $b = $c";
print "<br>";

$c = $a % $b;
print "$a % $b = $c";
print "<br>";

$c = $a ** $b;
print "$a ** $b = $c";
print "<hr>";


// 2. Operator Penugasan

$speed = 83;

$speed += 10;
print "Speed += 10 = $speed";
print "<br>";

$speed -= 10;
print "Speed -= 10 = $speed";
print "<br>";

$speed *= 2;
print "Speed *= 2 = $speed";
print "<br>";

$speed /= 2;
print "Speed /= 2 = $speed";
print "<br>";

$speed %= 10;
print "Speed %= 10 = $speed";
print "<hr>";


// 3. Increment dan Decrement

$score = 0;

$score++;
print "Score: $score";
print "<br>";

$score++;
print "Score: $score";
print "<br>";

$score--;

print "Score setelah decrement: $score";
print "<hr>";


// 4. Operator Relasi

$a = 6;
$b = 2;

$c = $a > $b;
var_dump($c);
print "<br>";

$c = $a < $b;
var_dump($c);
print "<br>";

$c = $a == $b;
var_dump($c);
print "<br>";

$c = $a != $b;
var_dump($c);
print "<br>";

$c = $a >= $b;
var_dump($c);
print "<br>";

$c = $a <= $b;
var_dump($c);
print "<hr>";


// 5. Operator Logika

$a = true;
$b = false;

$c = $a && $b;
var_dump($c);
print "<br>";

$c = $a || $b;
var_dump($c);
print "<br>";

$c = !$a;
var_dump($c);
print "<hr>";


// 6. Operator Bitwise

$a = 60;
$b = 13;

$c = $a & $b;
print "$a & $b = $c";
print "<br>";

$c = $a | $b;
print "$a | $b = $c";
print "<br>";

$c = $a ^ $b;
print "$a ^ $b = $c";
print "<br>";

$c = $a << 1;
print "$a << 1 = $c";
print "<br>";

$c = $a >> 1;
print "$a >> 1 = $c";
print "<hr>";


// 7. Operator Ternary

$suka = true;

$jawab = $suka ? "iya" : "tidak";

print $jawab;

?>