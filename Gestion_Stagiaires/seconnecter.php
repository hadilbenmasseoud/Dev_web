<?php
session_start();
if(isset($_SESSION['erreurlogin']))
$erreur=$_SESSION['erreurlogin'];
session_destroy();
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

            <div class="container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3" style="margin-top:10%;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Se connecter</div>
                            <div class="panel-body">
                                <?php
                                if(isset($erreur))
                                echo'
                                <div class="alert alert-danger"> '.
                                $_SESSION['erreurlogin'].'
                                </div>';
                                ?>
                                <form class="form" method="POST" action="seconnecter_action.php">
                                    <div class="form-group">
                                        <label for="login">Login</label>
                                        <input type="text" name='login' placeholder="Login" class="form-control"  > 
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Mot de passe</label>
                                        <input type="password" name='pwd'  placeholder="Mot de passe" class="form-control" >                            
                                    </div>
                                    <div>
                                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-log-in"></span>  Se connecter</button>
                                        <span><a href="nouveaucompte.php">Créer un Compte</a></span>
                                    </div>
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
