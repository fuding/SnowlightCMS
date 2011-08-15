<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('_includes/_core/_core.php');

/* Call Login Function and take proper action */

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        if($user->login($_POST['username'],$_POST['password']) == true){
            header("Location: me.php");
        } else {
            header("Location: index.php?error=password");
        }
    }
    
if(isset($_SESSION['user']['name'])){
    header("Location: me.php");
}

/* Define Page specific Variables */
$smarty->assign("page_title","Home",false);

/* Load Page specific Translations */
$smarty->assign("T_LOGIN_GREETINGS",$l->lT("LOGIN_GREETINGS"),false);
$smarty->assign("T_USERS_ONLINE",$l->lT("USERS_ONLINE"),false);

$smarty->assign("T_LOGIN",$l->lT("LOGIN"),false);
$smarty->assign("T_REGISTER",$l->lT("REGISTER"),false);

/* Display Page */
$smarty->display('_pages/_index.tpl');
?>
