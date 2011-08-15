<?php
/*
 __           _     __
(_ ._  _     / |\/|(_ 
__)| |(_)\/\/\_|  |__)

*/

class core{
    function filter($string){
        return htmlspecialchars($string);
    }
    
    function check_login(){
        if(!isset($_SESSION['user']['name'])){
            header("Location: index.php");
        }
    }
    function niceTime( $time ){
	$time = strtotime( str_replace( '+0000', '', $time ) );
	
	$delta = time() - $time;
	
	switch( $delta )
	{
		case ( $delta < 60 ):
			return 'less than a minute ago.';
		case( $delta < 120 ):
			return 'about a minute ago.';
		case( $delta < ( 45 * 60 ) ):
			return floor( $delta / 60 ) . ' minutes ago.';
		case( $delta < ( 90 * 60 ) ):
			return 'about an hour ago.';
		case( $delta < ( 24 * 60 * 60 ) ):
			return 'about ' . floor( $delta / 3600 ) . ' hours ago.';
		case( $delta < ( 48 * 60 * 60 ) ):
			return '1 day ago.';
		default:
			return floor( $delta / 86400 ) . ' days ago.';
	}
}
}
?>