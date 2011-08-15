<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('_includes/_core/_core.php');

$core->check_login();

/* Define Page specific Variables */
$smarty->assign("page_title","Home",false);

/* Load Page specific Translations */
$smarty->assign("T_READ_MORE",$l->lT("READ_MORE"),false);
$smarty->assign("T_FEATURED_CAMPAIGNS",$l->lT("FEATURED_CAMPAIGNS"),false);
$smarty->assign("T_GO_THERE",$l->lT("GO_THERE"),false);
$smarty->assign("T_WELCOME_TO_HABBO",$l->lT("WELCOME_TO_HABBO"),false);
$smarty->assign("T_WELCOME_TO_HABBO_TEXT",$l->lT("WELCOME_TO_HABBO_TEXT"),false);

/* Get Topstory */
$result = $sql->query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 3");
$topstory = "";
while ($row = $result->fetch_object()){
    $topstory .= "<div class=\"topstory\" style=\"background-image: url(".$row->topstory_image.")\"> 
	            <h4>Neueste News</h4>
	            <h3 style=\"float:left\"><a href=\"articles.php?id=".$row->id."\">".$row->title."</a></h3>
	              <p class=\"summary\"><br /> 
	            ".$row->story_short."
	            </p> 
	            <p> 
	                <a href=\"articles.php?id=".$row->id."\">Weiter lesen &raquo;</a> 
	            </p> 
	        </div>"; 
}
$result->close();

/* Get Subnews */

$result = $sql->query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 3,3");
$subnews = "";
$i = 0;
while ($row = $result->fetch_object()){
 $i++;
    if ($i % 2) {
        $color = "odd";
    } else {
        $color = "even";
    }
    $subnews .= "<li class=\"".$color."\"> 
                <a href=\"articles.php?id=".$row->id."\">".$row->title." &raquo;</a><div class=\"newsitem-date=\">".date("d.m H:i", $row->date)."</div> 
            </li>"; 
          
          
}
$result->close();

/* Get Hot Stuff */

$result = $sql->query("SELECT * FROM cms_staff_picks WHERE type = 'group' ORDER BY id DESC");
$hot_stuff = "";
$i = 0;
while ($row = $result->fetch_object()){
 $i++;
    if ($i % 2) {
        $color = "odd";
    } else {
        $color = "even";
    }
    $hot_stuff .= "<li class=\"".$color." left\" style=\"background-image: url(http://www.habbo.com/habbo-imaging/badge/b2102Xs03131s06114898d454e600c8336eb9ed4c5f93f1e85.gif)\"> 
            <a class=\"item\" href=\"/groups/welcometohabbo\">".$row->name."</a> 
        </li> "; 
          
          
}
$result->close();

 


/* Get Hot Campaigns */

$result = $sql->query("SELECT * FROM cms_hot_campaigns WHERE expires > '".time()."'");
$hot_campaigns = "";
$i = 0;
while ($row = $result->fetch_object()){
    $i++;
    if ($i % 2) {
        $color = "odd";
    } else {
        $color = "even";
    }
    $hot_campaigns .= "
    <li class=\"".$color."\"> 
            <div class=\"hotcampaign-container\"> 
                <a href=\"".$row->redirect_to."\"><img src=\"".$row->image."\" align=\"left\" alt=\"\" /></a> 
                <h3>".$row->title."</h3> 
                <p>".$row->description." </p> 
                <p class=\"link\"><a href=\"".$row->redirect_to."\">Go there &#187;</a></p> 
            </div> 
        </li>";  
}
$result->close();
                


 

$smarty->assign("TOPSTORY_NEWS",$topstory,false);
$smarty->assign("SUBNEWS",$subnews,false);
$smarty->assign("HOT_CAMPAIGNS",$hot_campaigns,false);
$smarty->assign("LASTVISIT",date("d.m.y H:i",$_SESSION['user']['lastvisit']),false);
$smarty->assign("HOT_STUFF",$hot_stuff,false);
/* Display Page */
$smarty->display('_pages/_me.tpl');
?>
