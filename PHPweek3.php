<?php

//Deel 1

let yArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

// a) Waarde toevoegen aan het array zonder de regel hierboven aan te passen
yArray.push('boot');

// b) Alle waarden van het array afdrukken
for (let i = 0; i < yArray.length; i++) {
console.log(yArray[i]);
}

?>

<?php

// Deel 2

let myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

// Aantal elementen bepalen en afdrukken
console.log("1. Het array heeft " + myArray.length + " elementen.");

// Element toevoegen aan het array
myArray.push('boot');

// Aantal elementen opnieuw bepalen en afdrukken
console.log("1. Het array heeft " + myArray.length + " elementen.");
?>