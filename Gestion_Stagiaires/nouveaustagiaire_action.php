<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$cin=$_POST['cin'];
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$institut=isset($_POST['institut'])?$_POST['institut']:"";
$diplome=isset($_POST['diplome'])?$_POST['diplome']:"";
$niveau=isset($_POST['niveau'])?$_POST['niveau']:"";
$spec=isset($_POST['spec'])?$_POST['spec']:"";
$tel=isset($_POST['tel'])?$_POST['tel']:"";
$email=isset($_POST['mail'])?$_POST['mail']:"";

$nomcv=$_FILES['cv']['name'];
$tmp=$_FILES['cv']['tmp_name'];
move_uploaded_file($tmp,"./CV/".$nomcv);

$requet="select* from stagaire where cin='$cin'";
$res=mysqli_query($idcon,$requet);
if(mysqli_num_rows($res)>0)
{  
     $msg="le Stagiaire existe déja";
    header("location:liste_stagiaire.php?message=$msg");
}
else{
$requet="insert into stagaire values ('$cin','$nom','$prenom','$institut','$diplome','$niveau','$spec','$tel','$email','$nomcv')";
$ok=mysqli_query($idcon,$requet);
$msg='Insertion effectué avec succsé';
header("location:liste_stagiaire.php?message=$msg&ok=1");
}
include("deconnexion.php");
}
?>