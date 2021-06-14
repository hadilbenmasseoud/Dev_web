<?php 
include("connexion.php");
$id=$_POST['id'];
$login=$_POST['login'];
$email=$_POST['email'];
$pwd=$_POST['pwd1'];
if(!empty($pwd))
{
$requet="update utulisateurs set login='$login',email='$email',pwd=md5('$pwd') where iduser='$id'";
}
else{
$requet="update utulisateurs set login='$login',email='$email' where iduser='$id'";
}
 $ok=mysqli_query($idcon,$requet);
header('location:liste_demande.php');

include("deconnexion.php");
?>