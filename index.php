<?php
require './datacon.php';
	
	   $name = mysql_real_escape_string($_POST['name']);
	   $email = mysql_real_escape_string($_POST['email']);
	   $phone = mysql_real_escape_string($_POST['contact']);
	   $id = mysql_real_escape_string($_POST['id']);
	   $query = "INSERT INTO sangram VALUES('','$name','$email',$phone,'$id')";	  
	   if($query_run = mysql_query($query))
	{
	echo "<script type='text/javascript'>
        alert(\"Registered succesfully\")
		</script>";
		
        echo "<script type='text/javascript'>
		window.location.replace(\"./\")
        </script>";
	}	
	else {
		     echo 'Sorry!';
	     }
?>

