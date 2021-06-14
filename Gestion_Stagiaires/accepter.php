<?php include("identifier.php");?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.min.css">  <script language="javascript" src="verification.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
    <body>
    <?php include('menu.php');?>
    <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Affectation du Stagiaire</div>
                            <div class="panel-body">
                            <form name="fs" method="GET" action="accepter_action.php" onSubmit="return verifstage()">
                            <?php $id=isset($_GET['idd'])?$_GET['idd']:0;?>
                            <label>ID Demande <?php echo $id;?></label>
                            
                                <input type="hidden" name='id' value=<?php echo $id?> >                                    
                                <div class="form-group">
                                        <label for="direction">Direction</label>
                                        <select name='direction' class="form-control"> 
                                        <option value="Direction">Direction</option>
                                            <option value="Informatique">Informatique</option>
                                            <option value="Ressources Humaines">Ressources Humaines</option>
                                            <option value="Finances">Finances</option>
                                            <option value="Commerciale">Commercial</option>
                                            <option value="Qualité">Qualité</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="encadreur">Encadreur</label>
                                        <input type="text" name='encadreur'  placeholder="Encadreur" class="form-control" >                            
                                    </div>

                                    <div class="form-group">
                                        <label for="sujet">Sujet</label>
                                        <input type="text" name='sujet'  placeholder="Sujet" class="form-control" > 
                                    </div>

                                    
                                    <input type="submit" value="Affecter" class="btn btn-primary">
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
