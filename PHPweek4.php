<?php
for ($i = 0; $i <= 50; $i++) {
    echo $i . '<br>';
}
?>

<?php
$klasgenoten = array("Zakaria", "Zinedine", "Ridda", "Lenny", "Gino", "Omesh", "Dylan", "Jayden", "Ensar", "Walid");

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}
?>

<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
$aantalMaanden = count($maanden);

for ($i = 0; $i < $aantalMaanden; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br>';
}
?>

<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br>';
}
?>

