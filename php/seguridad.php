<?PHP 
session_start();
if ($_SESSION["id_usuario"] == "") {
	header("Location: index.php");
	exit();
}
?>
