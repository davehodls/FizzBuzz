<?php

// We have clients that want a fairly simple feature built and are passionate about chicken and steak.
// They like the idea of the FizzBuzz programming concept, but instead want it to be ChiCken and SteAk.
// It will need to output numbers 1-120 each on a separate line.
// If the number is a multiple of 4, output "ChiCken" instead of the number and for the multiples of 7 output "SteAk" instead of the number.
// For numbers which are multiples of both 4 and 7 print "ChiCken and SteAk".
// For example, it would count 1, 2, 3, ChiCken, 5, 6, SteAk, ChiCken, 9, 10.....27, ChiCken and Steak, 29... etc.

echo "// basic obvious way:\n";
for ($i = 1; $i <= 120; $i++) {
    if ($i % 4 == 0 && $i % 7 == 0) echo "ChiCken and SteAk";
    else if ($i % 4 == 0) echo "ChiCken";
    else if ($i % 7 == 0) echo "SteAk";
    else echo "$i";
    echo "\n";
}
