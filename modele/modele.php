<?php
include 'data.php' ;
function getConnexion ($login, $mdp) {
    for ($i = 0; $i <= count(connexion()); $i++) {
        if ($login == key(connexion()[$i]) && $mdp == connexion()[$i]) {
            return True ;
        }
    }
}
function getLesSignes() {
    return signe();
}
    
function GetLeSigne($signeuser) {
    return signe()[$signeuser];
}
    /* On a dit qu'il fallait copier le code du controlleur mais ce que j'ai fait en haut semble fonctionnel. 
    $login = $_REQUEST['login'] ;
    $pw = $_REQUEST['pw'] ;
    foreach ($connection as $k => $v) {
    en cours, tu demanderas au prof de te reexpliquer
    if ($_REQUEST['login'] == $k && $_REQUEST['pw'] == $v) {
        include 'views/choix.php' ;
    }
    }
    break ;*/
