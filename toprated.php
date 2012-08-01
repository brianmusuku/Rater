<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
 include ("header.php");
echo  "
<html>
<head>
<link rel='stylesheet' type='text/css' href='indexstyle.css' />
</head>
<body background= 'pattern-13.jpg'/>
<div class='exa'>
<h4>ADD LISTING</h4>";
echo "<form action='http://localhost/scale/submit.php' method='post'>
<h4>name of product/service:</h4>
<input type='text' name='entity' />
<h4>One word description:</h4>
<input type='text' name='description' />
<h4>On scale of 1-10:</h4>
<select name='scale' />
<option name='1'>1</option>
<option name='2'>2</option>
<option name='3'>3</option>
<option name='3'>3</option>
<option name='4'>4</option>
<option name='5'>5</option>
<option name='6'>6</option>
<option name='7'>7</option>
<option name='8'>8</option>
<option name='9'>9</option>
<option name='10'>10</option>
</select><br/>
<button type='submit'>SHARE</button><br/>
</form></div><br/>";
include("core.php");
$entity = new entity();
$result1=$entity->get_top_entities();
echo "<div class='ex'><h4>RATINGS</h4>";
while($row=mysql_fetch_array($result1))
{
    if ($row['user_name']!='anonymous')
    {
    echo "<p><h1><a href='https://twitter.com/#!/".$row['user_name']."'>".$row['user_name']."</a></h1>";
    }
     echo "<p><h1>".$row['user_name']."</h1>";
    echo "gave a '".$row['scale']. "' to ";
    echo "<a href='http://localhost/scale/search.php?entity=".$row['entity']. "'>" .$row['entity']. "</a>";
    if ($row['description']!='')
    {
    echo " and described it as ".$row['description'].".";
}
$link='http://localhost/scale/rate.php';
    echo "<form action='$link' method='post'/>
    <input type='hidden' value='".$row["entity"]."'"." name='entity'/>
    <h4>On scale of 1-10:</h4>
    <select name='scale' />
    <option name='1'>1</option>
    <option name='2'>2</option>
    <option name='3'>3</option>
    <option name='3'>3</option>
    <option name='4'>4</option>
    <option name='5'>5</option>
    <option name='6'>6</option>
    <option name='7'>7</option>
    <option name='8'>8</option>
    <option name='9'>9</option>
    <option name='10'>10</option>
    </select>
    <button> rate</button></form>";
    echo $row['time'];
}

echo "</p></div>";
?>

