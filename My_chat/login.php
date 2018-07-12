<?PHP
include ('auth.php');
$ret = FALSE;
session_start();
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == 'OK')
{
	$ret = auth($_POST['login'], $_POST['passwd']);
	if ($ret == TRUE)
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('location: speak.html');
		return ;
	}
	else
		$_SESSION['loggued_on_user'] = "";
}
if ($ret == FALSE)
	header('location: index.html');
echo "ERROR\n";
?>