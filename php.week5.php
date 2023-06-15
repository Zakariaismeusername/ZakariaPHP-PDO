<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
echo "Goedemorgen";
} elseif ($tijd < "18:00") {
echo "Goedemiddag";
} else {
echo "Goedenavond";
}
?>

<?php
function berekenGemiddelde($getal1, $getal2) {
$gemiddelde = ($getal1 + $getal2) / 2;
echo "Het gemiddelde van $getal1 en $getal2 is: $gemiddelde";
}

getal1 = 10;
getal2 = 20;
berekenGemiddelde($getal1, $getal2);
?>

<?php
function dagenTotEindeJaar() {
$huidigeDatum = date_create();
$eindeJaar = date_create(date('Y').'-12-31');
$verschil = date_diff($huidigeDatum, $eindeJaar);

$dagenOver = $verschil->format('%a');

echo "Aantal dagen tot het einde van het jaar: $dagenOver";
}

dagenTotEindeJaar();
?>

<?php
function berekenTotaleLengte($array) {
$totaleLengte = 0;

foreach ($array as $string) {
$lengte = strlen($string);
$totaleLengte += $lengte;
}

return $totaleLengte;
}

$strings = array("Hallo", "Wereld", "Dit", "is", "een", "test");
$resultaat = berekenTotaleLengte($strings);
echo "Totale lengte van de strings: $resultaat";
?>
