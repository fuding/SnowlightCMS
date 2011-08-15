<?php
class snowlight{

    function get_statistic_value($value){
        global $sql;
        $value = $sql->real_escape_string($value);
        $query = "SELECT sval FROM server_statistics WHERE skey = '".$value."' LIMIT 1";
        $result = $sql->query( $query );
        $row = $result->fetch_object();
        return $row->sval;
    }

}
?>