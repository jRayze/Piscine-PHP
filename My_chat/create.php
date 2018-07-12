<?PHP
header('Location: index.html');
if ($_POST['login'] != "" && $_POST['passwd'] != "")
{
	if ($_POST['submit'] == 'OK')
	{
		try {
			$mysqli = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		$reponse = $mysqli->query('SELECT login FROM membres');
		$ret = FALSE;
		while ($donnees = $reponse->fetch())
		{
			echo $donnees['login'].'<br />';
			if ($donnees['login'] === $_POST['login'])
				$ret = TRUE;
		}
		$reponse->closeCursor();
		if ($ret == TRUE)
			echo "ERROR\n";
		else
		{
			$requette = $mysqli->prepare('INSERT INTO membres(login, passwd) VALUES (:login, :passwd)');
			$requette->execute(array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd'])));
			$requette->closeCursor();
		}
	}
	else
	{
		echo "ERROR\n";
	}
}
else
{
	echo "ERROR\n";
}
?>