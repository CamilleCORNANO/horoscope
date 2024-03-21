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
            include "views/admin.php";
            break ;
        }
        
    case 'modifier' :
        {
            include 'views/choix.php' ;
            break ;
        }
         
    default:
    {include 'views/connexion.php';}
}
