<?PHP
date_default_timezone_set('Europe/Paris');
session_start();
if ($_SESSION['loggued_on_user'] == "")
{
	echo "<p>Connectez-vous pour acceder au chat : <A href='index.html'>Retour a l'acceuil</A></p>";
	return ;
}
if (file_exists("private/chat") == TRUE)
{
	$conv = unserialize(file_get_contents('private/chat'));
	foreach ($conv as $elem)
	{
		echo "[".date('H:i', $elem['time'])."] ";
		echo "<b>".$elem['login']." </b>:";
		echo $elem['msg']."<br />";
	}
}
?>