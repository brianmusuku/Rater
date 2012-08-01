<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
class entity
{	
	public $updateid;
    public $user_name;
	public $entity_name;
	public $time;
    public $scale;
    public $description;
    
    
    
    //create update for a particular table $clique
	public function create_entity()
	{	
		include ("configirate.php");
		$result=mysql_query("INSERT INTO updator (entity,time,scale,user_name,description)
		VALUES ('$this->entity_name','$this->time','$this->scale','$this->user_name','$this->description')");
		if ($result)
		{
			return true;
		}
		else
		return false;
		mysql_close($con);
	}
    
    //delete update
	private function delete_update($updateid)
	{	
		include ("configirate.php");
		$result=mysql_query("");
		if ($result)
		{
			return true;
		}
		else
		return false;
		mysql_close($con);
	}
    
    
    
    //show an update
    public function get_entities()
	{
		include ("configirate.php");
		$result1=mysql_query("SELECT * FROM updator  ORDER BY  updateid DESC LIMIT 20");
		if ($result1)
		{
             
             return $result1;
		}
		else return die ('error: ' . mysql_error());;
	}
    
    
    public function get_top_entities()
	{
		include ("configirate.php");
		$result1=mysql_query("SELECT * FROM updator  ORDER BY  scale DESC LIMIT 10");
		if ($result1)
		{
             
             return $result1;
		}
		else return die ('error: ' . mysql_error());;
}

 public function search_entities($search_term)
	{
		include ("configirate.php");
		$result1=mysql_query("SELECT * FROM updator  WHERE entity= '$search_term' ORDER BY  updateid DESC LIMIT 10");
		if ($result1)
		{
             
             return $result1;
		}
		else return die ('error: ' . mysql_error());;
}

//calculate the avarage rating
public function times_rated()
	{
		include ("configirate.php");
		$result1=mysql_query("SELECT scale FROM updator  WHERE entity= '$this->entity_name' ORDER BY  updateid DESC LIMIT 10");
		$times=mysql_num_rows($result1);
        return $times;
}

public function avarage_rating()
	{
		include ("configirate.php");
		$result1=mysql_query("SELECT AVG (scale) FROM updator  WHERE entity= '$this->entity_name' ");
		$num=mysql_fetch_array( $result1);
        return round($num[0] , 1);
        }
}
?>
