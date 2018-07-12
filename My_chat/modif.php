<?PHP
include ('auth.php');
//header('Location: index.html');
if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "")
{
	try {
		$mysqli = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	$ret = getid($_POST['login'], $_POST['oldpw']);
	var_dump($ret);
	if ($ret != -1)
	{
		$new = hash('whirlpool', $_POST['newpw']);
		$query = $mysqli->prepare('UPDATE membres SET passwd =:newpw WHERE id = :id');
		$query->execute(array(
			'newpw' => $new,
			'id' => $ret
		));
		$query->closeCursor();
	}
	else
		echo "ERROR\n";
}
else
{
	echo "ERROR\n";
}

?>