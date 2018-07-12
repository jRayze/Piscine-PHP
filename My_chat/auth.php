<?PHP
function auth($login, $passwd){
	try {
		$mysqli = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	$passwd = hash("whirlpool", $passwd);
	$reponse = $mysqli->query('SELECT login, passwd FROM membres');
	while ($donnees = $reponse->fetch())
	{
		if ($donnees['login'] === $login)
		{
			if ($donnees['passwd'] === $passwd)
			{
				$reponse->closeCursor();
				return (TRUE);
			}
		}
	}
	return (FALSE);
}

function getid($login, $passwd){
	try {
		$mysqli = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	$passwd = hash("whirlpool", $passwd);
	$reponse = $mysqli->query('SELECT * FROM membres');
	while ($donnees = $reponse->fetch())
	{
		if ($donnees['login'] === $login)
		{
			if ($donnees['passwd'] === $passwd)
			{
				$reponse->closeCursor();
				return ($donnees['id']);
			}
		}
	}
	return (-1);
}

?>