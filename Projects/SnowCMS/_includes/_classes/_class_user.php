<?php
class user{
    function login($username,$pwd){
        global $sql;                       
        $pwd = sha1($pwd.sha1($pwd));
        $query = "SELECT username, auth_ticket, id, figure, motto, credits_balance, activity_points_balance, timestamp_lastvisit FROM characters WHERE username = '".$username."' AND auth_ticket = '".$pwd."' LIMIT 1";
        $result = $sql->prepare($query);
        $result->execute();
        $result->bind_result( $name, $password, $id, $figure, $motto, $credits, $pixels, $lastvisit );
        
            while ($result->fetch()){
                $sql->query("UPDATE characters SET timestamp_lastvisit = '".time()."' WHERE username = '".$name."'");
            
                $_SESSION['user']['name'] = $name;
                $_SESSION['user']['password'] = $password;
                $_SESSION['user']['figure'] = $figure;
                $_SESSION['user']['motto'] = $motto;
                $_SESSION['user']['credits'] = $credits;
                $_SESSION['user']['pixels'] = $pixels;
                $_SESSION['user']['lastvisit'] = $lastvisit;  
                return true; 
            }
  
    }
    
    function logout($hash){
        session_destroy();
        return true;
    }
}
?>