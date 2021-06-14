<?php 
include("identifier.php");
include("connexion.php");
$id=isset($_GET['ids'])?$_GET['ids']:0;
$requet="select* from stage where id='$id'";
$res=mysqli_query($idcon,$requet);
$ligne=mysqli_fetch_array($res);
$dir=$ligne[2];
$encd=$ligne[3];
$sujet=$ligne[4];
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.min.css">  
<script language="javascript" src="verification.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

    <body>
    <?php include('menu.php');?>
    <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Edition Stage</div>
                            <div class="panel-body">
                            <form name="fs" method="GET" action="editerstage_action.php" onSubmit="return verifstage()">
                            <?php $id=isset($_GET['ids'])?$_GET['ids']:0;?>
                            
                                <input type="hidden" name='id' value=<?php echo $id?> >                                    
                                <div class="form-group">
                                        <label for="direction">Direction</label>
                                        <select name='direction' class="form-control" > 
                                        <option value="Direction" <?php if($dir=='Direction') echo'selected'?>>Direction</option>
                                            <option value="Informatique" <?php if($dir=='Informatique') echo'selected'?>>Informatique</option>
                                            <option value="Ressources Humaines" <?php if($dir=='Ressources Humaines') echo'selected'?>>Ressources Humaines</option>
                                            <option value="Finances" <?php if($dir=='Finances') echo'selected'?>>Finances</option>
                                            <option value="Commerciale" <?php if($dir=='Commerciale') echo'selected'?>>Commerciale</option>
                                            <option value="Qualité" <?php if($dir=='Qualité') echo'selected'?>>Qualité</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="encadreur">Encadreur</label>
                                        <input type="text" name='encadreur'  placeholder="Encadreur" class="form-control" value="<?php echo $encd;?>">                            
                                    </div>

                                    <div class="form-group">
                                        <label for="sujet">Sujet</label>
                                        <input type="text" name='sujet'  placeholder="Sujet" class="form-control"  value="<?php echo $sujet;?>"> 
                                    </div>

                                    
                                    <input type="submit" value="Editer" class="btn btn-primary">
                                    <input type="reset" value="Annuler" class="btn btn-primary" >

                                </form>
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
