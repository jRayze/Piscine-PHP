<?PHP
date_default_timezone_set('Europe/Paris');
session_start();
function random_color_part() {
	return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
	return random_color_part() . random_color_part() . random_color_part();
}

if ($_SESSION && $_SESSION['loggued_on_user'] == "")
{
	echo "<p>Connectez-vous pour acceder au chat : <A href='index.html'>Retour a l'acceuil</A></p>";
	return ;
}
if (file_exists("private/chat") == TRUE)
{
	$conv = unserialize(file_get_contents('private/chat'));
	$tmp = '';
	foreach ($conv as $elem)
	{
		$print = '';
		if ($tmp !== $elem['login'])
		{
			$color = random_color();
			//$print = '<span style="color:'.$color.";>";
			$print = "<span style='color: red;'>";
		}
		$print .= "[".date('H:i', $elem['time'])."] ";
		echo $print;
		echo "<b>".$elem['login']." </b>:";
		echo $elem['msg']."<br />"."</span>";
		$tmp = $elem['login'];
	}
}

?>