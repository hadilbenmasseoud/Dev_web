
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="index.php">Gestion Stagiaires</a>
 

 
    <ul class="navbar-nav mr-auto">
    
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestion Demandes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nouveau_demande.php">Ajouter Demande</a>
          <a class="dropdown-item" href="liste_demande.php">Tous Les Demandes</a>
          <a class="dropdown-item" href="liste_demandeattente.php">Demandes en attente</a>
          <a class="dropdown-item" href="liste_demanderefuse.php">Demandes refusées</a>
          <a class="dropdown-item" href="liste_demandeaccepte.php">Demandes acceptées</a>
         
       
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Gestion Stages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="liste_stage.php">Tous les Stages</a>
          <a class="dropdown-item" href="stageencours.php">stages en cours</a>
          <a class="dropdown-item" href="stage_valide.php">Stages Validés</a>
          <a class="dropdown-item" href="stage_refuse.php">Stages Refusés</a>

        </div>
      </li>
  
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestion Stagiaires
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="nouveau_stagiaire.php">Ajouter Stagiaire</a>
          <a class="dropdown-item" href="liste_stagiaire.php">Tous les Stagiaires</a>
        
         
        </div>
      </li>
      <?php 
      if($_SESSION['user']['role']=='admin')
      echo'
      <li class="nav-item dropdown">
        <a class="nav-link" href="liste_utulisateurs.php" role="button">
          Utulisateurs
        </a>
      </li>
      ';?>
    </ul>
    <span>
    <a href="user.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['login']?> 
        </a>
</span>
<span style="margin-left:20px;">
    <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</span>
  </div>
</nav>
