<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
 include ("header.php");
 include("core.php");
function reverse_escape($str)
        {
        $search=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
        $replace=array("\\","\0","\n","\r","\x1a","'",'"');
        return str_replace($search,$replace,$str);
    }
    
        $safer_entity=reverse_escape(trim(strip_tags(htmlspecialchars($_GET['entity'], ENT_QUOTES ))));
echo  "
<html>
<head>
<link rel='stylesheet' type='text/css' href='indexstyle.css' />
</head>
<body background= 'pattern-13.jpg'/>
<div class='exa'>
<h4>INFO:</h4>";
echo "<h4>name of product/service:</h4><h1>".
$safer_entity.
"</h1><h4>Rating:</h4>";
$entity = new entity();
$entity->entity_name=$safer_entity;
echo "<div class='rater'>". $entity->avarage_rating()."</div>";
echo "</h1><h4>Number of times rated:</h4>";
 echo "<h1>".$entity->times_rated()."</h1>";
echo "</div>";
$result1=$entity->search_entities($safer_entity);
echo "<div class='ex'><h4>SEARCH RESULTS:</h4>";
while($row=mysql_fetch_array($result1))
{
    if ($row['user_name']!='anonymous')
    {
    echo "<p><h1><a href='https://twitter.com/#!/".$row['user_name']."'>".$row['user_name']."</a></h1>";
    }
     echo "<p><h1>".$row['user_name']."</h1>";
    echo "gave a '".$row['scale']. "' to ".$row['entity']. "  ";
    if ($row['description']!='')
    {
    echo "and described it as ".$row['description'];
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


