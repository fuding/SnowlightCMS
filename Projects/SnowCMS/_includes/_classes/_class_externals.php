<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

*/

class externals{
    function get_texts(){  
        global $excepition;
        $texts = @file_get_contents("Http://habbo.de");
        if(empty($texts)){
            $excepition->out("critical", "Could not load External Texts!");
            return false;
        } else {
            return $texts.$this->get_extra_texts();
        }
    }
    function get_extra_texts(){
        global $sql;
        return "shizzle";
    }
    
    function get_variables(){  
        global $excepition;
        $texts = @file_get_contents("Http://habbo.de");
        if(empty($texts)){
            $excepition->out("critical", "Could not load External Variables!");
            return false;
        } else {
            return $texts.$this->get_extra_variables();
        }
    }
    function get_extra_variables(){
        global $sql;
        return "shizzle";
    }
}
?>