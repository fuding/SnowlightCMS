<?php
$pwd = $_GET['pw'];
echo sha1($pwd.sha1($pwd));
echo "<br>".$_SERVER["DOCUMENT_ROOT"];
?>