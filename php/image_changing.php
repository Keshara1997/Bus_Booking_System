<?php
   $tar="../up/".basename($_FILES['pp']['name']);
   move_uploaded_file($_FILES['pp']['tmp_name'],$tar);
   $file=fopen("../files/pp.txt","w");
   fwrite($file,$tar);
   fclose($file);
   echo readfile("../files/pp.txt");
?>
