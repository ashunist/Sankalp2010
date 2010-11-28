<?php 

session_start();

    include 'library/config.php';
    include 'library/opendb.php';
 
    

            // if form has been submitted
       $username=$_POST['username'];
       $password=$_POST['pass'];    
              
            
                $check = mysql_query("SELECT * FROM candidate WHERE username='$username'and pass='$password' ");

   
         
          
         if ($check)
          {
                      
                 $check2 = mysql_num_rows($check);
  if($check2==1)               
            {
                 
            
$_SESSION['username']=$_POST['username'];
session_register($_SESSION['username']);
header("location:userhome.php");
exit;

}
else
{
header("location:login.php");
}
}
        
  
     ?>