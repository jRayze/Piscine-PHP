<?PHP
header('location: speak.html');
session_start();

if ($_SESSION['loggued_on_user'] == "")
{
	header('location: index.html');
	return ;
}
else
{
	if ($_POST['submit'] == "ENVOYER" && $_POST['msg'])
	{
		if (file_exists("private") == FALSE)
			mkdir("private", '0755');
		if (file_exists("private/chat") == FALSE)
		{
			$array = array(array('login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']));
			$serial = serialize($array);
			file_put_contents("private/chat", $serial);
		}
		else
		{
			$fd = fopen("private/chat", 'c+');
			flock($fd, LOCK_SH | LOCK_EX);
			$cont = file_get_contents("private/chat");
			$unserial = unserialize($cont);
			$unserial[] = array('login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']);
			$cont = serialize($unserial);
			file_put_contents("private/chat", $cont);
			flock($fd, LOCK_UN);
			fclose($fd);
		}
	}
}
?>