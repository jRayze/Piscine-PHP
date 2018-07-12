<?PHP

$mysqli = new mysqli("localhost", "root", "", "users");
if ($mysqli->connect_errno) {
	echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "Connection Successful !\n";
if (!$mysqli->query("CREATE TABLE IF NOT EXISTS membres(id INT PRIMARY KEY AUTO_INCREMENT, login VARCHAR(255), passwd VARCHAR(255))"))
	echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
$mysqli->close();
?>