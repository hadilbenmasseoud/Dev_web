<?php
include("identifier.php");
 include("connexion.php");
$cin=isset($_GET['cin'])?$_GET['cin']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
$requet="select d.*,s.institut,s.diplome,s.cv from demande d,stagaire s where d.id like '%$id%' and d.cin like'%$cin%' and d.cin=s.cin and etat='refuse'";
$res=mysqli_query($idcon,$requet);
$n=mysqli_num_rows($res);  

?>
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


<div class="container-fluid">
 <div class="panel panel-primary">
     <div class="panel-heading">Liste Demande refusée <?php echo' ('. $n.')';?></div>
     <div class="pannel-body">
     <div style="margin-bottom:10px;margin-top:10px;margin-left:25%;">
         <form method="GET" action="liste_demande.php" class="form-inline">
                <input type="text" value="<?php echo $cin;?>" name="cin" placeholder="CIN:" class="form-control" onChange="this.form.submit()">
                <input type="text" name="id" placeholder="ID  Demande:" class="form-control" onChange="this.form.submit()" style="margin-left:10px;">
                <button type="submit" class="btn btn-info" style="margin-left:10px;">
                    <span class="glyphicon glyphicon-search"></span>
                    Rechercher
                </button>
         </form>
     </div>

	<table class="table table-striped">
		<tr>
            <th>ID Demande</th>
            <th>CIN</th>
            <th>Institut</th>
			      <th>Diplome</th>
            <th>Type de Stage</th>
            <th>Date debut</th>
            <th>Date fin</th>
            <th>CV</th>
            <th>Actions</th>






		</tr>
        <?php
		while($ligne=mysqli_fetch_array($res))
		{
			?>
		<tr>          
            <td><?php echo $ligne[0];?></td>
            <td><?php echo $ligne[1];?></td>
		       	<td><?php echo $ligne[6];?></td>
		      	<td><?php echo $ligne[7];?></td>
			      <td><?php echo $ligne[2];?></td>
            <td><?php echo $ligne[3];?></td>
            <td><?php echo $ligne[4];?></td>
            <td>
    <a href="test.php?nf=<?php echo $ligne[8];?>"> 
    <span class="glyphicon glyphicon-file" style="font-size:25px;color:red"></span>   
     </a>
</td>
           
        <td>
                  <?php if($ligne[5]=='en attente')
                echo "
               
                <a href=\"accepter.php?idd=$ligne[0]\">  
                      <button type=\"button\" class=\"btn btn-success btn-sm\">
                <span class=\"glyphicon glyphicon-ok\"></span> Accepter
              </button>
              </a>
          
                <a href=\"refuser.php?idd=$ligne[0]\">
                <button type=\"button\" class=\"btn btn-danger btn-sm\">
                <span class=\"glyphicon glyphicon-remove\"></span> Refuser
              </button>
                </a>";
                else if($ligne[5]=='refuse')
                echo"
                <span class=\"glyphicon glyphicon-remove\"style=\"color:red;\"></span>
              ";
              else {
                echo"
                <span class=\"glyphicon glyphicon-ok\"style=\"color:green;\"></span>
              ";
              }
                ?>
             </td>
             <td>
                <a onClick="return confirm('Etes vous sur de vouloir supprimer la demande')" 
                href="supprimer_demande.php?idd=<?php echo $ligne[0]; ?>">
                    <span class="glyphicon glyphicon-trash "></span>
                </a>
                <a href="editer_demande.php?idd=<?php echo $ligne[0]; ?>">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
        </td>
		</tr>
		<?php
	}
		mysqli_close($idcon);
		?>
    </table>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>