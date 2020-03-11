<?php
/** Controller utilisé pour supprimer un utilisateur. On vérifie l'id_utilisateur passé dans l'URL de admin_manager.tpl */
if(isset($_GET)){
    
    $id_personne = $_GET['id_personne'];
    echo($id_personne);

    $delete = new Personne();
    $delete->deletePersonne($id_personne);

    echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=admin_manager&delete=ok"</script>');
}
