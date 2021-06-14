<?php
$idcon=mysqli_connect("localhost","root","");
if($idcon)
{

	$okbd=mysqli_select_db($idcon,"gestion_stagiaires");
	if($okbd==false)
		
		echo "<br/> base incorrect<br/>";
}
else 
echo "erreur de connexion avec le serveur:<br/>";
?>