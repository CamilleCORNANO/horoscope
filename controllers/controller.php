<?php

switch($action)
{
    case 'reponse' :
        {
            $signeuser = $_REQUEST['signe'] ;
            echo signe()[$signeuser] ;
            break ;
        }
    case 'connexion' :
        {
            $login = $_REQUEST['login'] ;
            $pw = $_REQUEST['pw'] ;
            foreach (connexion() as $k => $v) {
                if ($_REQUEST['login'] == $k && $_REQUEST['pw'] == $v) {
                    include 'views/choix.php' ;
                }
            }
            break ;
        }
    case 'administrer' :
        {
             //FINIS CA PWEASE
        }
    case 'modifier' :
        {
            for ($s = 0; $s <= 12; $s++) {
                signe()[$s] = $_POST[key(signe()[$s])] ;
            }
            include 'views/choix.php' ;
            break ;
        }
         
    default:
    {include 'views/connexion.php';}
}
