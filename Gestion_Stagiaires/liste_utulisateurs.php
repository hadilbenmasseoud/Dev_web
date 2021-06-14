<?php
include("identifier.php");
include("connexion.php");
$login=isset($_GET['nom'])?$_GET['nom']:"";
$requet="select* from utulisateurs where login like'%$login%'";
$res=mysqli_query($idcon,$requet);
$n=mysqli_num_rows($res);  
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('menu.php');?>

         

<div class="container">
 <div class="panel panel-primary">
     <div class="panel-heading">Liste Utulisateurs <?php echo' ('. $n.')';?></div>
     <div class="pannel-body">
     <div style="margin-bottom:10px;margin-top:10px;margin-left:30%;">
     <form method="GET" action="liste_utulisateurs.php" class="form-inline">
                <input type="text" name="nom" placeholder="Login" class="form-control" onInput="this.form.submit()">
                <button type="submit" class="btn btn-info" style="margin-left:10px;">
                    <span class="glyphicon glyphicon-search"></span>
                    Rechercher
                </button>
         </form>
</div>
	<table class="table table-striped">
		<tr>
			<th>Login</th>
			<th>E-mail</th>
            <th>Role</th>
            <th>Actions</th>
		</tr>
        <?php
        
		while($ligne=mysqli_fetch_array($res))
		{
			?>
		<tr <?php if($ligne['etat']==0) echo 'class="danger"';else echo 'class="success"'?>>
			<td><?php echo $ligne[1];?></td>
			<td><?php echo $ligne[2];?></td>
			<td><?php echo $ligne[3];?></td>
		
         
            <td>
            <?php if($ligne['etat']==0)
                echo"
                <a href=\"activer.php?idu=$ligne[0]\">
                    <span class=\"glyphicon glyphicon-ok\"style=\"color:green;\"></span>
                  </a>";
                  else {
                    echo"
                    <a href=\"disactiver.php?idu=$ligne[0]\">
                        <span class=\"glyphicon glyphicon-remove\"style=\"color:red;\"></span>
                      </a>";
                  }
                  ?>
                <a  onClick="return confirm('Etes vous sur de vouloir supprimer l'utulisateur')" href="supprimer_user.php?idu=<?php echo $ligne[0]; ?>">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
               
            </td>

		</tr>
		<?php
	}
		mysqli_close($idcon);
		?>
    </table>
    </div>
</div>
</div>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>