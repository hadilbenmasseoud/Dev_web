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

            <div class="container" style="margin-top:5%">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Créer Compte</div>
                            <div class="panel-body">
                                <form class="form" name="f" method="POST"    action="nouveaucompte_action.php" onSubmit="return verifcompte()">
                                    <div class="form-group">
                                        <label for="login">Nom Utulisateur</label>
                                        <input type="text" name='login' placeholder="Nom Utulisateur" class="form-control"  > 
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" name='email'  placeholder="E-mail" class="form-control" >                            
                                    </div>
                                    <div class="form-group">
                                        <label>Role :</labe><br>
                                        <input  type="radio" name='role' value="admin" >   <b> Admin</b><br>
                                        <input type="radio" name='role'    value="user">   <b> Utulisateur  </b>                      
                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd1">Mot de passe</label>
                                        <input type="password" name='pwd1'  placeholder="Mot de passe" class="form-control" >                            
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd2">Confirmer Mot de passe</label>
                                        <input type="password" name='pwd2'  placeholder="Confirmer Mot de passe" class="form-control" >                            
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
