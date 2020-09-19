<?
// Informazioni di Accetso
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Negozio";

// Creazione connessione
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connessione Fallita: " . $conn->connect_error);
} 

?>