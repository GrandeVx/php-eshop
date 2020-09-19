<?
    include 'db.php';

$sql = "SELECT CodProd, CodCat, DescrProd, PrezzoProd FROM Prodotti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class=\"item-shop\">"."<p class=\"item-name\">".$row["DescrProd"]."</p>"."<p class=\"item-prezzo\">".$row["PrezzoProd"]."$"."</p>"."<button class=\"btn btn-success\"> Compra </button>"."</div>";
   // echo "<tr><td>".$row["CodProd"]."</td><td>".$row["CodCat"]." ".$row["PrezzoProd"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
