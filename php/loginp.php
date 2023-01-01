<?php
   include'connect.php';
   $uname=$_POST['uname'];
   $pword=$_POST['pword'];
   $query="SELECT * FROM account WHERE user_name=\"$uname\" AND password=\"$pword\";";
   $result=$conn->query($query);
   if($result->num_rows==1)
   {
       echo header("location:settings.php");
       $file=fopen("../files/log.txt","w");
       $row=$result->fetch_assoc();
       $a_id=$row['account_id'];
       fwrite($file,$a_id);
       fclose($file);
       
   }
   else
   {
       echo ("<script>window.alert(\"Error logging in\")</script>;");  
   }      
?>