<?php include("identifier.php"); ?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script language="javascript" src="verification.js"></script>
  <script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.min.css"> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

    <body>
    <?php include('menu.php');?>
    <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Nouveau Demande</div>
                            <div class="panel-body">
                            <form class="form " name="fd" method="POST" action="nouveaudemande_action.php" onSubmit="return verifdemande()">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" name='cin' placeholder="CIN" class="form-control" > 
                                    </div>

                                


                                    <div class="form-group">
                                        <label for="type">Type de Stage</label>
                                        <select name='type'  class="form-control" placeholder="Type de Stage" >
                                             <option value="Type de Stage">Type de Stage</option> 
                                            <option value="Stage Ouvrier">Stage Ouvrier</option>
                                            <option value="Stage Technecien">Stage Technecien</option>
                                            <option value="Stage Fin Etudes">Stage Fin Etudes</option>
                                            <option value="Stage Decouverte">Stage Decouverte</option>

                                        </select>
                                    </div>

                                    <label>Periode</label>

                                    <div class="form-row">
                                        <div class="col-2">
                                            <input type="date" name='dd'  class="form-control"> 
                                        </div>
                                            <div class="col-2">
                                        <input type="date" name='df'  class="form-control"> 
                                         </div>
                                         
                                    </div>
                                    
                                    <input type="submit" value="Enregister" class="btn btn-primary">
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
