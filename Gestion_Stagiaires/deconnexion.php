<?php
$idcon=mysqli_connect("localhost","root","");
$okdec=mysqli_close($idcon);
if(!($okdec))
echo 'echec de la deconnexion <br/>';
?>
