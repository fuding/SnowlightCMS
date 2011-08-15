<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('_includes/_core/_core.php');

$smarty->caching = false;

$core->check_login();

/* Define Page specific Variables */
$smarty->assign("page_title","Articles",false);

/* Load Page specific Translations */
$smarty->assign("T_READ_MORE",$l->lT("READ_MORE"),false);

/* Get Article list */
$result = $sql->query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 15");
$article_list = "";
$i = 0;
while ($row = $result->fetch_object()){
    
    $article_list .= "<li><a href=\"?id=".$row->id."\" class=\"article-".$row->id."\">".$row->title."&nbsp;&raquo;</a> </li>"; 
    if($i < 1){
        $emptyid = $row->id;
        $i++;
    }
    
}
$result->close();

/* Get Article */
if(empty($_GET['id'])){
    $id = $emptyid;
} else {
    $id = $sql->real_escape_string($_GET['id']);
}
$result = $sql->query("SELECT * FROM cms_news WHERE id = '".$id."' LIMIT 1");
$article = "";
$row = $result->fetch_object();

$smarty->assign("A_ARTICLE_TITLE",$row->title,true);
$smarty->assign("A_ARTICLE_IMAGE",$row->article_image,true);
$smarty->assign("A_ARTICLE_CONTENT",$row->story_long,true);
$smarty->assign("A_AUTHOR",$row->author,true);
$smarty->assign("A_DATE",$row->date,true);
$smarty->assign("A_SUMMARY",$row->story_short,true);
$smarty->assign("A_ID",$row->id,true);

$result->close();



 

$smarty->assign("ARTICLE_LIST",$article_list,false);

/* Display Page */
$smarty->display('_pages/_articles.tpl');
?>
