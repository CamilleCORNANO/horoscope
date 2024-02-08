<?php

switch($action)
{
    case 'reponse' :
        {
            $signeuser = $_REQUEST['signe'] ;
            echo $signe[$signeuser] ;
            break ;
        }
    case 'connexion' :
        {
            $login = $_REQUEST['login'] ;
            $pw = $_REQUEST['pw'] ;
            foreach ($connection as $k => $v) {
                //en cours, tu demanderas au prof de te reexpliquer
            }
        }
    default:
    {include 'views/connexion.php';}
}
