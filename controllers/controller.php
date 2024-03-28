<?php

switch($action)
{
    case 'reponse' :
        {
            $signeuser = $_REQUEST['signe'] ;
            $tab=GetLesSignes();
            echo $tab[$signeuser] ;
            break ;
        }
    case 'connexion' :
        {
            $login = $_REQUEST['login'] ;
            $pw = $_REQUEST['pw'] ;
            if (connexion($login, $pw) == 1) {
                    include 'views/choix.php' ;
                } else {
                    include 'views/connexion.php';
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
