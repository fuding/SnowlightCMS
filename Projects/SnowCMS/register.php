<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('_includes/_core/_core.php');
    
if(isset($_SESSION['user']['name'])){
    header("Location: me.php");
}

$smarty->assign("T_REGISTER_GREETING",$l->lT("REGISTER_GREETING"),false);
$smarty->assign("T_USERS_ONLINE",$l->lT("USERS_ONLINE"),false);
$smarty->assign("T_NAME_NOT_AVAILABLE",$l->lT("NAME_NOT_AVAILABLE"),false);
$smarty->assign("T_NAME_AVAILABLE",$l->lT("NAME_AVAILABLE"),false);
$smarty->assign("T_CONFIRM_PASSWORD",$l->lT("CONFIRM_PASSWORD"),false);
$smarty->assign("T_EMAIL",$l->lT("EMAIL"),false);
$smarty->assign("T_CAPTCHA",$l->lT("CAPTCHA"),false);
$smarty->assign("T_ENTER_CAPTCHA",$l->lT("ENTER_CAPTCHA"),false);
$smarty->assign("T_BOYS",$l->lT("BOYS"),false);
$smarty->assign("T_GIRLS",$l->lT("GIRLS"),false);

/* Display Page */
$smarty->display('_pages/_register.tpl');
?>
