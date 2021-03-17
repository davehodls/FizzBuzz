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

echo "// alternate way with less comparisons of i:\n";
for ($i = 1; $i <= 120; $i++) {
    $output = $i;
    if ($i % 4 == 0) {
        $output = 'ChiCken';
        if ($i % 7 == 0) {
            $output .= ' and SteAk';
        }
    } else if ($i % 7 == 0) {
        $output = 'SteAk';
    }
    //echo "$output\n";
}

/*
//echo "// super-genius way that may have an arithmetic way to only check modulus once for each number, and append strings as vars:\n";
$chicken = 'ChiCken';
$steak = 'SteAk';
for ($i = 1; $i <= 120; $i++) {
    $iMod4 = $i % 4;
    $iMod7 = $i % 7;
    $iMods = $iMod4 + $iMod7;
    $iMod47 = $iMods ? $iMods % $i : 'D/0';
    //echo "i $i mod 4 = $iMod4, mod 7 = $iMod7, iMods $iMods, iMod47 = $iMod47: ";
    // there's maybe something to do with subtracting i from the added mods or something
    // then run it through some modulus then check greater than / less than with something to determine whether to append vars
    // but I'm not seeing a good enough pattern yet
    //echo "shrug\n";
    // ah well
}
*/

// Step 2: Make it so the client can specify their own two line numbers to determine the text.

parseLineNumbers(5, 9);

function parseLineNumbers($num1, $num2) {
    for ($i = 1; $i <= 120; $i++) {
        if ($i % $num1 == 0 && $i % $num2 == 0) echo 'ChiCken and SteAk';
        else if ($i % $num1 == 0) echo 'ChiCken';
        else if ($i % $num2 == 0) echo 'SteAk';
        else echo $i;
        echo "\n";
    }
}

// Step 3: Based on feedback from the clients, the product manager thinks it would be best to only show the word if it's
// an even number. If a number and a multiple match and it's an odd number, you should still output just the number

ChiCkenSteAk(5, 9);

function ChiCkenSteAk($mult1, $mult2) {
    for ($i = 1; $i <= 120; $i++) {
        if ($i % 2 == 0) {
            if ($i % $mult1 == 0 && $i % $mult2 == 0) echo 'ChiCken and SteAk';
            else if ($i % $mult1 == 0) echo 'ChiCken';
            else if ($i % $mult2 == 0) echo 'SteAk';
            else echo $i;
        } else echo $i;
        echo "\n";
    }
}

// Step 4:
// After talking with a client, the product manager says the client needs to be able to assign as many supplied numbers
// as they want that will not allow the text to be printed out. For instance, if the client specifies 52 and 78, then
// even if 52 or 78 is a multiple of one of the given number multiples, it will still print out the number 52 or 78, not
// the text that is supposed to be printed out.

printTextExceptOnIterations(52, 78);

function printTextExceptOnIterations(...$numbers) {
    //echo "numbers: " . print_r($numbers, true);
    for ($i = 1; $i <= 120; $i++) {
        //echo "iteration $i % 2 = " . ($i % 2) . "\n";
        if ($i % 2 == 0) {
            $numbersOutput = '';
            $textIteration = 0;
            foreach ($numbers as $number) {
                $textIteration++;
                //echo "i $i % number $number = " . ($i % $number) . "\n";
                if ($i % $number == 0) {
                    $numbersOutput = $i;
                    break;
                } else $numbersOutput .= ($textIteration > 1 ? ' ' : '') . "text $textIteration";
            }
            echo $numbersOutput;
        } else echo $i;
        echo "\n";
    }
}
