<?php
$naam = "John Doe";
$email = "johndoe@example.com";

session_start();

$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;

echo "De variabelen 'naam' en 'email' zijn opgeslagen in de sessie.";
?>
