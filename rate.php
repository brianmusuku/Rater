<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
 if (count($_POST)==2)
    {
        
        function reverse_escape($str)
        {
        $search=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
        $replace=array("\\","\0","\n","\r","\x1a","'",'"');
        return str_replace($search,$replace,$str);
    }
    
        $safer_entity=reverse_escape(trim(strip_tags(htmlspecialchars($_POST['entity'], ENT_QUOTES ))));
        $safer_rating=reverse_escape(trim(strip_tags(htmlspecialchars($_POST['scale'], ENT_QUOTES))));
        
        echo $safer_rating;
        echo $safer_rating;

       include("core.php");
        $entity = new entity();
        $time=date('D, d M Y H:i:s T');
        $entity->entity_name=$safer_entity;
        $entity->scale=$safer_rating;
        $entity->time=$time;
        $entity->user_name='anonymous';
        
        
        /*redirect now..*/
        if ($entity->create_entity()==true)
        {
            
            header( 'Location: http://localhost/scale/index.php' );
        }
    }

?>
