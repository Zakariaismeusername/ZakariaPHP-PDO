<?php
session_start();

$naam = $_SESSION['John Doe'];
$email = $_SESSION['johndoe@example.com'];

echo "Naam: " . $naam . "<br>";
echo "Email: " . $email;
?>

<?php
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
Connected to database (winkel).
?>

<?php
session_start();

$selectedIDs = [1, 3, 5, 7];

$_SESSION['selectedIDs'] = $selectedIDs;

echo "Geselecteerde ID's zijn opgeslagen in de sessie.";
?>

<?php
session_start();

$selectedIDs = $_SESSION['selectedIDs'];

foreach ($selectedIDs as $id) {
    echo "ID: " . $id . "<br>";
}
?>
