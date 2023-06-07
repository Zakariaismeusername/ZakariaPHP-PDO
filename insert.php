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

<!DOCTYPE html>
<html>
<head>
<title>Product Toevoegen</title>
</head>
<body>
<h2>Voeg een nieuw product toe:</h2>

<form method="POST" action="insert.php">
<label for="product_naam">Productnaam:</label>
<input type="text" name="product_naam" required><br>

<label for="prijs_per_stuk">Prijs per stuk:</label>
<input type="number" step="0.01" name="prijs_per_stuk" required><br>

<label for="omschrijving">Omschrijving:</label>
<textarea name="omschrijving" required></textarea><br>

<input type="submit" value="Toevoegen">
</form>

<?php
$servername = "localhost";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "jouw_database_naam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $product_naam = $_POST["product_nsam"];
$prijs_per_stuk = $_POST["prijs_per_stuk"];
$omschrijving = $_POST["omschrijving"];

$sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving)
VALUES ('$product_naam', $prijs_per_stuk, '$omschrijving')";

if ($conn->query($sql) == TRUE) {
echo "<p>Product succesvol toegevoegd.</p>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }

    $conn->close();
    ?>
</body>
</html>
