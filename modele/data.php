<?php

function signe() {
$signe = array(
    "belier" => "Vous devrez faire des efforts sérieux pour acquerir un bon niveau.", 
    "taureau" => "Une de vos plus grandes qualités est la capacité à saisir les théories.", 
    "gemeaux" => "De temps à autre, admettez que vous n'etes pas le seul à raisonner avec logique.",
    "cancer" => "La rapidité de votre intlence risaque de de vous entrainer à negliger certains details.",
    "lion" => "Un effort vers la patience et la perseverance sera pour vous grandement payant",
    "vierge" => "Faites l'effort de vous concentrer.",
    "balance" => "Vous avez une forte tendance à choisir les solutions astucieuses",
    "scorpion" => "Renoncez à imposer vos propres données et appliquez les méthodes apprises",
    "sagittaire" => "Pardonnez avec aisance et sans amubiguïté, mais n'acceptez aucun extrême.",
    "capricorne" => "Une certaine facilité ne doit pas vous detourner de l'objectif.",
    "verseau" => "Ce travail vous demandera beaucoup d'ingéniosité.",
    "poissons" => "Votre esprit vif et limpide facilite la résolution des problèmes."
    ) ;
return $signe;}
function GetDataSigne() {
    $sql="SELECT * FROM astrologie";
    return executerRequete($sql)->fetchAll() ;
}
function connexion($login, $mdp) {
    $sql = "SELECT COUNT(*) FROM connexion WHERE login='$login' AND mdp = '$mdp'";
    return executerRequete($sql)->fetchAll();
}

function connexionBDD() {
    $serveur='mysql:host=localhost';
    $bdd='dbname=horoscope';
    $user="root";
    $mdp="";
    try{
        $db = new PDO($serveur.';'.$bdd, $user, $mdp);
        $db->query("SET CHARACTER SET utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }catch(Exception $e) {
        echo "Impoossible de se connecter à la base";
        echo $e->getMessage();
            die();
    }       
}
function executerRequete($sql, $params = null) {
    if ($params == null) {
        $resultat = connexionBDD()->query($sql);;
    }
    return $resultat;
}

//var_dump(signe(), connexion());

    
