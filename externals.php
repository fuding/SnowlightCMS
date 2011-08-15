<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

*/
        
require_once("./_includes/_core/_core.php");

if(!empty($_GET['request'])){
    switch($_GET['request']){
        case "external_texts":
            echo $externals->get_texts();
        break;
        case "external_variables":
            echo $externals->get_variables();
        break;
    }
}
?>