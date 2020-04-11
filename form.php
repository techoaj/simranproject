<?php
  $con = mysqli_connect('127.0.0.1','root','');
  $db = mysqli_select_db($con,'studentdata');
  if(!$con)
      echo 'connection failed';
  if($db==false)
      echo 'database not found';
  @$id = $_POST['id'];
  @$cse301 = $_POST['cse301'];
  @$cse411 = $_POST['int411'];
  @$cse416 = $_POST['int416'];
  $percent = (($cse301 + $cse411 + $cse416)*100)/300;
  $sql = "insert into percentage(reg_no	,cse301,int411,int416,percent) values ('$id','$cse301','$cse411','$cse416','$percent')";
  $query = mysqli_query($con,$sql);
  if(!$query)
      echo 'data not inserted';
  else
      echo 'data insertion successful'; 
  
  echo '</br>Percentage is '.$percent;
?> 