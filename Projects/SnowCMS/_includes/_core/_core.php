<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

*/

require_once("./_includes/_inc_config.php");       


require_once("./_includes/_classes/_class_core.php");

require_once("./_includes/_classes/_class_excepition.php");  
require_once("./_includes/_classes/_smarty/_class_smarty.php");
require_once("./_includes/_classes/_class_externals.php");
require_once("./_includes/_classes/_class_localization.php");
require_once("./_includes/_classes/_class_user.php");
require_once("./_includes/_classes/_class_snowlight.php");

session_start();

$smarty = new Smarty;
$core = new core;
$snowlight = new snowlight;
$excepition = new excepition;
$externals = new externals;
$l = new localization;
$user = new user;
$l->loadTranslationFile("./_includes/_languages/_".$cms['language'].".xml");

$sql = @new mysqli($mysqli['server'].":".$mysqli['port'], $mysqli['username'], $mysqli['password'], $mysqli['database'] );
if (mysqli_connect_errno() != 0){
    $excepition->out("critical", mysqli_connect_error());
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 60;
$smarty->template_dir = '_templates/';
$smarty->compile_dir = '_includes/_smarty/_templates_c/';
$smarty->config_dir = '_includes/_smarty/_configs/';
$smarty->cache_dir = '_includes/_smarty/_cache';

if(isset($_SESSION['user']['name'])){
    $smarty->assign("USER",array("NAME" => $_SESSION['user']['name'],
                                 "PASSWORD" => $_SESSION['user']['password'],
                                 "FIGURE" => $_SESSION['user']['figure'],
                                 "MOTTO" => $_SESSION['user']['motto'],
                                 "CREDITS" => $_SESSION['user']['credits'],
                                 "PIXELS" => $_SESSION['user']['pixels'],true));
}

$smarty->assign("HOTEL",array("ONLINECOUNT" => $snowlight->get_statistic_value("active_connections"),
                              "SHORT_NAME" => "Habbo",
                              "WEB_BUILD" => $cms['web_build'],
                              "WEB_PATH" => $cms['webpath'], true));

$smarty->assign("T_USERNAME",$l->lT("USERNAME"),false);
$smarty->assign("T_PASSWORD",$l->lT("PASSWORD"),false);
$smarty->assign("T_WELCOME_BACK",$l->lT("WELCOME_BACK"),false);
$smarty->assign("T_CREDITS",$l->lT("CREDITS"),false);
$smarty->assign("T_PIXELS",$l->lT("PIXELS"),false);
$smarty->assign("T_HABBOS_ONLINE",$l->lT("HABBOS_ONLINE"),false);
$smarty->assign("T_ENTER_HABBO",$l->lT("ENTER_HABBO"),false);
$smarty->assign("T_NAV_ME",$l->lT("NAV_ME"),false);
$smarty->assign("T_NAV_MY_ACCOUNT",$l->lT("NAV_MY_ACCOUNT"),false);
$smarty->assign("T_NAV_NEWS",$l->lT("NAV_NEWS"),false);
$smarty->assign("T_NAV_LOGOUT",$l->lT("NAV_LOGOUT"),false);
?>