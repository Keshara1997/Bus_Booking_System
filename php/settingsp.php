<?php
 include'connect.php';
 $file=fopen("../files/log.txt","r");
 $ac_id=fread($file,filesize("../files/log.txt"));
 $query="SELECT * FROM account WHERE account_id=$ac_id";
 $result=$conn->query($query);
 $row=$result->fetch_assoc();
 $uname=$row['user_name'];
 $pword=$row['password'];
 $query="SELECT customer.*,customer_email.* From customer INNER JOIN customer_email ON customer_email.NIC=customer.NIC WHERE customer.account_id=$ac_id;";
 $result=$conn->query($query);
 $row=$result->fetch_assoc();
 $fname=$row['fname'];
 $lname=$row['lname'];
 $nic=$row['NIC'];
 $email=$row['email'];

?>