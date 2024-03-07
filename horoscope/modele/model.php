<? include 'data.php' ;
function getConnexion ($login, $mdp) {
    foreach ($i = 0, i <= count($connexion), i++) {
        if ($login == key($connection[$i]) && $mdp == $connexion[$i]) {
            return True ;
        }
    }
}
    /* On a dit qu'il fallait copier le code du controlleur mais ce que j'ai fait en haut semble fonctionnel. 
    $login = $_REQUEST['login'] ;
    $pw = $_REQUEST['pw'] ;
    foreach ($connection as $k => $v) {
    //en cours, tu demanderas au prof de te reexpliquer
    if ($_REQUEST['login'] == $k && $_REQUEST['pw'] == $v) {
        include 'views/choix.php' ;
    }
    }
    break ;*/
?>