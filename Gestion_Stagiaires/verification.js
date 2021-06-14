function verif()
{
    if(document.form_stagiaire.cin.value == "" ){
        swal ( " Veuillez entrer le cin de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.cin.focus();
        return false;
    } 
    if(document.form_stagiaire.nom.value == "" ){
        swal ( "Veuillez entrer le Nom de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.nom.focus();
        return false;
    } 
    if(document.form_stagiaire.prenom.value == "" ){
        swal ( "Veuillez entrer le prenom de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.prenom.focus();
        return false;
    } 
    if(document.form_stagiaire.institut.value == "" ){
        swal ( "Veuillez entrer l'institut de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;

        document.form_stagiaire.institut.focus();
        return false;
    } 
    if(document.form_stagiaire.diplome.value == "" ){
        swal ( "Veuillez entrer le diplome de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.diplome.focus();
        return false;
    } 
    if(document.form_stagiaire.spec.value == "" ){
        swal ( "Veuillez entrer la Specialite de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.spec.focus();
        return false;
    } 
    if(document.form_stagiaire.niveau.options[document.form_stagiaire.niveau.selectedIndex].value == "Niveau" ){
        swal ( "Veuillez selectioner le niveau de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;

        document.form_stagiaire.niveau.focus();
        return false;
    } 
    if(document.form_stagiaire.tel.value == "" ){
        swal ( "Veuillez entrer le N° de Telephone de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        document.form_stagiaire.tel.focus();
        return false;
    } 
}
    function verifdemande()
    {
        if(document.fd.cin.value == "" ){
            swal ( " Veuillez entrer le cin de Stagiaire" , " Vous avez cliqué sur le bouton! " , "info" )   ;
            document.fd.cin.focus();
            return false;
        } 
        if(document.fd.type.options[document.fd.type.selectedIndex].value == "Type de Stage" ){
            swal ( "Veuillez selectioner le type de Stage" , " Vous avez cliqué sur le bouton! " , "info" )   ;
    
            document.fd.type.focus();
            return false;
        } 
        if(document.fd.dd.value == "" ){
            swal ( " Veuillez entrer la date de debut du stage" , " Vous avez cliqué sur le bouton! " , "info" )   ;
            document.fd.dd.focus();
            return false;
        } 
        if(document.fd.df.value == "" ){
            swal ( " Veuillez entrer la date de fin du stage" , " Vous avez cliqué sur le bouton! " , "info" )   ;
            document.fd.df.focus();
            return false;
        } 
    }
        function verifstage()
        {
            if(document.fs.direction.options[document.fs.direction.selectedIndex].value == "Direction" ){
                swal ( "Veuillez selectioner la direction" , " Vous avez cliqué sur le bouton! " , "info" )   ;
        
                document.fs.direction.focus();
                return false;
            } 

            if(document.fs.encadreur.value == "" ){
                swal ( " Veuillez choissisez l'encadreur" , " Vous avez cliqué sur le bouton! " , "info" )   ;
                document.fs.encadreur.focus();
                return false;
            } 

            if(document.fs.sujet.value == "" ){
                swal ( " Veuillez introduire le sujet" , " Vous avez cliqué sur le bouton! " , "info" )   ;
                document.fs.sujet.focus();
                return false;
            } 

        }
    
 function verifcompte()
 {       

    if(document.f.login.value=="" ){
        swal ( " Veuillez Entrer le Nom" , " Vous avez cliqué sur le bouton! " , "error" )   ;
        document.f.login.focus();
        return false;
    } 

   if(document.f.email.value == "" ){
        swal ( " Veuillez entrer l'email" , " Vous avez cliqué sur le bouton! " , "error" )   ;
        document.f.email.focus();
        return false;
    } 
    if((!(document.f.role[0].checked))&&(!(document.f.role[1].checked))){
        swal ( "Veuillez selectioner le Role" , " Vous avez cliqué sur le bouton! " , "error" )   ;

        return false;
    } 
    if(document.f.pwd1.value != document.f.pwd2.value ){
        swal ( " Veuillez Confirmer le mot de passe" , " Vous avez cliqué sur le bouton! " , "error" )   ;
        document.f.pwd2.focus();
        return false;
    }
 }
    

