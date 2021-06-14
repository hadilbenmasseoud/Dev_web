<?php 
include("identifier.php");
include("connexion.php");
$cin=isset($_GET['cin'])?$_GET['cin']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
$dir=isset($_GET['direction'])?$_GET['direction']:"all";
$d=date("d/m/Y");
if($dir=='all')
$requet="select s.id,st.cin,st.nom,st.prenom,st.cv,d.typestage,s.dep,s.encadreur,d.dd,d.df from demande d,stage s,stagaire st 
where st.cin=d.cin and d.id=s.id and s.id like'%$id%' and d.cin like '%$cin%'";
else
$requet="select s.id,st.cin,st.nom,st.prenom,st.cv,d.typestage,s.dep,s.encadreur,d.dd,d.df from demande d,stage s,stagaire st 
where st.cin=d.cin and d.id=s.id and s.id like'%$id%' and d.cin like '%$cin%' and dep='$dir'";
$res=mysqli_query($idcon,$requet);
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
<div class="container">
 <div class="panel panel-primary">
     <div class="panel-heading">Chercher Stage</div>
     <div class="pannel-body">
         <form method="GET" action="liste_stage.php" class="form-inline">
                <label>Direction:</label>
                <select name="direction" class="form-control" id="direction"  onChange="this.form.submit()">
                  <option value="all" <?php if($dir=="all") echo "selected"?>>Tous les Directions</option>
                  <option value="Informatique" <?php if($dir=="Informatique") echo "selected"?>>Informatique</option>
                  <option value="Ressources Humaines" <?php if($dir=="Ressources Humaines") echo "selected"?>>Ressources Humaines</option>
                  <option value="Qualité" <?php if($dir=="Qualité") echo "selected"?>>Qualite</option>
                  <option value="Commerciale" <?php if($dir=="Commerciale") echo "selected"?>>Commerciale</option>
                  <option value="Finances" <?php if($dir=="Finances") echo "selected"?>>Finances</option>
                  </select>
                  <input type="text" name="cin" value="<?php echo $cin;?>" placeholder="CIN:" class="form-control" onChange="this.form.submit()">
                <input type="text" name="id" value="<?php echo $id;?>" placeholder="ID  Demande:" class="form-control" onChange="this.form.submit()">
                <button type="submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span>
                    chercher
                </button>
         </form>
     </div>
</div>
</div>
<div class="container">
 <div class="panel panel-primary">
     <div class="panel-heading">Liste Stage</div>
     <div class="pannel-body">


	<table class="table table-striped">
		<tr>
			<th>CIN</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>CV</th>
      <th>Type de Stage</th>
			<th>Direction </th>
      <th>encadreur</th>
      <th>Date debut</th>
      <th>Date fin</th>
      <th>Actions</th>



		</tr>
        <?php
		while($ligne=mysqli_fetch_array($res))
		{
			?>
		<tr>
            <td><?php echo $ligne[1];?></td>
			      <td><?php echo $ligne[2];?></td>
			      <td><?php echo $ligne[3];?></td>
            <td>
    <a href="test.php?nf=<?php echo $ligne[4];?>"> 
    <span class="glyphicon glyphicon-file" style="font-size:25px;color:red"></span>   
     </a>
</td> 
            <td><?php echo $ligne[5];?></td>
            <td><?php echo $ligne[6];?></td>
            <td><?php echo $ligne[7];?></td>
            <td><?php echo $ligne[8];?></td>
            <td><?php echo $ligne[9];?></td>

            <td>
                <a onClick="return confirm('Etes vous sur de vouloir supprimer le Stage')" href="supprimer_stage.php?ids=<?php echo $ligne[0]; ?>">
                    <span class="glyphicon glyphicon-trash "></span>
                </a>
                <a href="editer_stage.php?ids=<?php echo $ligne[0]; ?>">
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