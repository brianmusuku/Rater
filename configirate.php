<?php
$con = mysql_connect('127.0.0.1:3306', 'root', 'password');
if (!$con) 
{
    die('Could not connect: ' . mysql_error());
}
//else echo 'Connected successfully';
$db_selected = mysql_select_db('db_one', $con);
if (!$db_selected) {
    die ('Can\'t use db_one : ' . mysql_error());
}
//else echo  "db selected";
?>

