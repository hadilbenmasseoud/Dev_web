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
                        <div class="panel-heading">Nouveau Stagiaire</div>
                            <div class="panel-body">
                                <form class="form" name="form_stagiaire" method="POST" enctype="multipart/form-data"   action="nouveaustagiaire_action.php" onSubmit="return verif()">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" name='cin' placeholder="CIN" class="form-control"  > 
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" name='nom'  placeholder="Nom" class="form-control" >                            
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" name='prenom'  placeholder="Prenom" class="form-control" > 
                                    </div>
                                    <div class="form-group">
                                        <label for="institut">Institut</label>
                                        <input type="text" name='institut'  placeholder="Institut" class="form-control" >                            
                                    </div>

                                    <div class="form-group">
                                        <label for="diplome">Diplome</label>
                                        <input type="text" name='diplome'  placeholder="Diplome" class="form-control" > 
                                    </div>

                                    <div class="form-group">
                                        <label for="niveau">Niveau d'etude</label>
                                        <select name='niveau' class="form-control" > 
                                        <option value="Niveau">Niveau</option>
                                            <option value="Bac+1">Bac+1</option>
                                            <option value="Bac+2">Bac+2</option>
                                            <option value="Bac+3">Bac+3</option>
                                            <option value="Bac+4">Bac+4</option>
                                            <option value="Bac+5">Bac+5</option>
                                            <option value="Bac+6">Bac+6</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="spec">Specialité</label>
                                        <input type="text" name='spec' placeholder="Specialité" class="form-control" > 
                                    </div>


                                    <div class="form-group">
                                        <label for="tel">N° Telephone</label>
                                        <input type="text" name='tel'  placeholder="N° Telephone" class="form-control" > 
                                    </div>


                                    <div class="form-group">
                                        <label for="mail">E-mail</label>
                                        <input type="text" name='mail'  placeholder="E-mail" class="form-control"> 
                                    </div>

                                    <div class="form-group">
                                        <label for="cv">CV</label>
                                        <input type="file" name='cv'   class="form-control"> 
                                    </div>
                                    <input type="submit" value="Enregister" class="btn btn-primary" >
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
