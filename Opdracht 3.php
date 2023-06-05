<?php
// Deel 1
// a)
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = 'boot'; // Voeg een waarde toe aan het array

// b)
echo "// Deel 1\n";
foreach ($myArray as $value) {
    echo $value . "\n"; // Druk alle waarden van het array af
}

// Deel 2
// a)
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$count = count($myArray); // Bepaal het aantal elementen
echo "// Deel 2\n";
echo "1. Het array heeft $count elementen.\n";

// b)
$myArray[] = 'boot'; // Voeg een element toe aan het array
$count = count($myArray); // Bepaal opnieuw het aantal elementen
echo "1. Het array heeft $count elementen.\n";

// Deel 3
echo "// Deel 3\n";
echo "Regel 2: " . $myArray[1] . "\n";
echo "Regel 5: " . $myArray[4] . "\n";
echo "Regel 8: " . $myArray[7] . "\n";
echo "Regel 9: " . $myArray[count($myArray)] . "\n"; // Geeft een foutmelding, omdat de index buiten het bereik van het array is
echo "Regel 12: " . count($myArray) . "\n";
echo "Regel 19: " . end($myArray) . "\n";

// Deel 4A
echo "// Deel 4A\n";
$numbers = [7.5, 8.3, 9.1];
$average = round(array_sum($numbers) / count($numbers), 1);
echo "Het gemiddelde is: $average\n";
?>