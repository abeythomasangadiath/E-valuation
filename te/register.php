<?php

if (isset($_POST['reg_user'])) {
 $connect=mysql_connect("localhost","root","");
 
 $db=mysql_select_db("e-valuation");
 $staffid=$_POST['staff-id'];
 $depname=$_POST['dep-name'];
 $name=$_POST['staff-name'];
 $designation=$_POST['designation'];
 $dob=$_POST['dob'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $password=$_POST['psw'];
 
 $sql="INSERT INTO `staff-tb` (`staff-id`, `dep-name`, `staff-name`, `staff-designation`, `dob`, `gender`, `address`, `email`, `phone`) VALUES  ('$staffid','$depname','$name','$designation','$dob','$gender','$address','$email','$phone')";
 $result=mysql_query($sql);
 $sql="INSERT INTO `login-tb` (`username`, `password`, `designation`) VALUES ('$staffid','$password','staff')";
 $result=mysql_query($sql);
 mysql_close($connect);
echo("<script language='javascript'>window.location.href='login.html';</script>");
  }
  
  ?>