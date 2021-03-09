<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_hotel";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
} else {
  echo "Connection done. <br/>";
}

$sql = "SELECT ospiti.name, ospiti.lastname, prenotazioni_has_ospiti.prenotazione_id FROM ospiti JOIN prenotazioni_has_ospiti ON ospiti.id = prenotazioni_has_ospiti.ospite_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // output data of each row
    echo  "QUERY : Stampare tutti gli ospiti per ogni prenotazione";
    echo  "</br></br>----------------------------------------------------------------------------";
    while($row = $result->fetch_assoc()) {
        echo  "</br>";
        echo "<div>". "nome ospite  ". $row['name']. " cognome: ".$row['lastname'] . " prenotazione id: ".$row['prenotazione_id'] . "</div>";
        echo  "----------------------------------------------------------------------------------";
  }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>