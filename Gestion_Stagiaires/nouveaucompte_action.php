<?php 

include("connexion.php");

$login=isset($_POST['login'])?$_POST['login']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$role=isset($_POST['role'])?$_POST['role']:"";
$pwd=isset($_POST['pwd1'])?$_POST['pwd1']:"";



$requet="select* from utulisateurs where login='$login'";
$res=mysqli_query($idcon,$requet);
if(mysqli_num_rows($res)>0)
{   
    header('location:nouveaucompte.php');
}
else{
$requet="INSERT INTO `utulisateurs`(`iduser`, `login`, `email`, `role`, `etat`, `pwd`) VALUES('','$login','$email','$role','0',md5('$pwd'))";
$ok=mysqli_query($idcon,$requet);
header('location:seconnecter.php');

include("deconnexion.php");
}
?>