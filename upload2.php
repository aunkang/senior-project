<?php
if(isset($_POST["submit"])) {
	$target_file = "uploads/";
	$name = basename($_FILES["file"]["name"]);
	$target_name = $target_file . $name;
    if (file_exists($target_name))  
        {  
        	$message = "file already existed";
			echo "<script type='text/javascript'>alert('$message');";
			echo "alert('wtfff');";
			echo "window.location = 'upload99.php';";
			echo "</script>";

        }  
    else  
        {  
	        move_uploaded_file($_FILES["file"]["tmp_name"],$target_name);
        	$message = "Successful";
			echo "<script type='text/javascript'>alert('$message');";	
			echo "window.location = 'upload99.php';";    
			echo "</script>";      
        }  
}else{
	echo "WTF!!!";
}
?> 