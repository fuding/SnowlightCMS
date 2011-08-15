<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

*/

class excepition{

    

    function out($type,$error){
    global $cms;
        $header = "<pre> __           _     __<br />(_ ._  _     / |\/|(_<br />__)| |(_)\/\/\_|  |__)</pre><br /><br />";
                   
        echo "<link href=\"".$cms['webpath']."_templates/default/css/error.css\" rel=\"stylesheet\" type=\"text/css\" />";
        switch($type){
            case "critical":
                $this->critical($header.$error);
            break;
            case "notice":
                $this->notice($header.$error);
            break;
            case "light":
                $this->light($header.$error);
            break;
        }
    }
    
    function critical($error){
        echo "<div class=\"error\">".$error."</div>";
    }
    
    function notice($error){
        echo "<div class=\"info\">".$error."</div>";
    }
    
    function light($error){
        echo "<div class=\"warning\">".$error."</div>";
    }
}
?>