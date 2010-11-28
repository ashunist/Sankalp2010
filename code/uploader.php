<?php



$filename = $_FILES['Filedata']['name'];	

move_uploaded_file($_FILES['Filedata']['tmp_name'], "http://www.sankalp2010.com/upload/".$filename);

?>