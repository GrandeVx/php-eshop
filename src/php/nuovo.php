<?php
  // Inclusione Del file con collegamento al database
 include 'db.php';


$codprod = $_POST['CodProd'];
$cat = $_POST['cat'];
$descr = $_POST['DescrProd'];
$prezzo = $_POST['PrezzoProd'];
$quantità = $_POST['QtaRes'];

$sql = "INSERT INTO Prodotti (CodProd,CodCat,DescrProd,PrezzoProd,QtaRes)
VALUES ('$codprod','$cat','$descr','$prezzo','$quantità')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('New record created successfully');</script>";
  header("Location: http://192.168.64.2/Royality/areautente.html");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


