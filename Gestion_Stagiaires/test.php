
<?php
include("identifier.php");
 include("connexion.php");
$nomf=isset($_GET['nf'])?$_GET['nf']:"";
 ?>
   <!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    
</head>
<body>

<embed src="cv/<?php echo $nomf;?>" type="application/pdf" width="100%" height="600px">
</body>
</html>