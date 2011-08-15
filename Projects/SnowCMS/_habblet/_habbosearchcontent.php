<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

Me File
*/

/* Load Core */
require('../_includes/_core/_core.php');

$core->check_login();

$name = $sql->real_escape_string($_POST['searchString']);

$result = $sql->query("SELECT * FROM characters WHERE name like '%".$name."%' ORDER BY id DESC LIMIT 3,3");
$list = "";
$i = 0;
while ($row = $result->fetch_object()){
 $i++;
    if ($i % 2) {
        $color = "odd";
    } else {
        $color = "even";
    }
    
          
          
}
$result->close();
?>
<ul class="habblet-list">
                    <li class=\"even offline\" homeurl=\"/home/".$row->name."\" style=\"background-image: url(http://www.habbo.com/habbo-imaging/avatar/hr-165-36.hd-209-11.ch-255-64.lg-280-64.sh-906-72.he-1609-72.ca-1810,s-3.g-0.d-3.h-3.a-0,ccab0890613c21439d7275a56c8cac49.gif)\">
                        <div class=\"item\">
                            <b>".$row->name."</b><br />
                            
                        </div>
                        <div class=\"lastlogin\">
                            <b>Last log in</b><br />
                                <span title=\"".date("d.m.y H:i",$row->timestamp_lastvisit)."\">".$core->nicetime($row->timestamp_lastvisit)."</span>
                        </div>
                        <div class=\"tools\">
                                <a href=\"#\" class=\"add\" avatarid=\"".$row->id."\" title=\"Add ".$row->name." to your friend list\"></a>
                        </div>
                        <div class=\"clear\"></div>
                    </li>
                    
                    
        </ul>
    <div id="habblet-paging-avatar-habblet-list-container">
        <p id="avatar-habblet-list-container-list-paging" class="paging-navigation">
                 <span class="disabled">&laquo;</span>
                    <span class="current">1</span>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-2">2</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-3">3</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-4">4</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-5">5</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-6">6</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-7">7</a>
                    <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-page-8">8</a>
                <a href="#" class="avatar-habblet-list-container-list-paging-link" id="avatar-habblet-list-container-list-next">&raquo;</a>
        </p>
        <input type="hidden" id="avatar-habblet-list-container-pageNumber" value="1"/>
        <input type="hidden" id="avatar-habblet-list-container-totalPages" value="93"/>
    </div>