<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_db";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
} else {
  echo "Connection done. <br/>";
}

$sql = "CREATE TABLE ospiti (
    id INT(6)  AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ";
$sql = "INSERT INTO ospiti (firstname, lastname, email)
VALUES ('Mario', 'Bianchi', 'Bianchi@example.com')";
$result = $conn->query($sql);

// if ($result && $result->num_rows > 0) {
//     // output data of each row
//     echo  "QUERY : Stampare tutti gli ospiti per ogni prenotazione";
//     echo  "</br></br>----------------------------------------------------------------------------";
//     while($row = $result->fetch_assoc()) {
//         echo  "</br>";
//         echo "<div>". "nome ospite  ". $row['name']. " cognome: ".$row['lastname'] . " prenotazione id: ".$row['prenotazione_id'] . "</div>";
//         echo  "----------------------------------------------------------------------------------";
//   }
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }
$conn->close();
?>
