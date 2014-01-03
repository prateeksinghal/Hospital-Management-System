<?php
require("include/dbinfo.php");
$link=mysql_connect($server,$user,$pass)or die(errorReport(mysql_error()));
mysql_select_db($db,$link)or die(errorReport(mysql_error()));
mysql_query("delete from Session");
?>