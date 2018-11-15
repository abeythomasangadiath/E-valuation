<?php
if (isset($_POST['login'])) {
 $connect=mysql_connect("localhost","root","");
 $db=mysql_select_db("e-valuation");
 $username=$_POST['username'];
 $password=$_POST['psw'];
 $sql="select * from `login-tb` where(`username`='$username' and `password`='$password')";
 $result=mysql_query($sql);
 $row=mysql_fetch_row($result);
 if($row>1)
 {
  echo("<script language='javascript'>window.location.href='welcome.html';</script>");
 }
 else
	echo("<script language='javascript'>window.location.href='login.html';</script>"); 
}
?>