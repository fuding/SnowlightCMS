<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('_includes/_core/_core.php');

if($user->logout($_GET['hash'])){
    header("Location: index.php");
}

?>