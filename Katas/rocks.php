<?php
/*Task
Vanya gets bored one day and decides to enumerate a large pile of rocks. He first counts the rocks and finds out that he has n rocks in the pile, then he goes to the store to buy labels for enumeration.

Each of the labels is a digit from 0 to 9 and each of the n rocks should be assigned a unique number from 1 to n.

If each label costs $1, how much money will Vanya spend on this project?

Input/Output
[input] integer n
The number of rocks in the pile.

1  ≤  n  ≤  10^9

[output] an integer
the cost of the enumeration.

Example
For n = 13, the result should be 17.

the numbers from 1 to n are:
1 2 3 4 5 6 7 8 9 10 11 12 13
we need 17 single digit labels:
1 2 3 4 5 6 7 8 9 1 0 1 1 1 2 1 3
each label cost $1, so the output should be 17. */
function rocks(int $n)
{
    $cost = 0; // Inicializamos el costo total a 0

    for ($i = 1; $i <= $n; $i *= 10) {
        // Calculamos la cantidad de números en el rango actual
        $rangeCount = min($n - $i + 1, $i * 9);

        // Calculamos la cantidad de dígitos en este rango
        $digitCount = (int) log10($i) + 1;

        // Sumamos el costo de los dígitos en este rango al costo total
        $cost += $rangeCount * $digitCount;
    }

    return $cost;
}

// Test the function
echo rocks(13); // Output: 17
