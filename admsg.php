
  <meta charset="utf-8">

<?php

include_once "conn.php";

$name = $_POST['name'];
$highschool = $_POST['highschool'];
$major = $_POST['major'];

$qq = $_POST['qq'];
$email = $_POST['email'];
$work = $_POST['work'];

$district = $_POST['district'];
$phone = $_POST['phone'];

$birthday = $_POST['birthday'];

$dream = $_POST['dream'];
$hobby = $_POST['hobby'];
$suggest = $_POST['suggest'];

$dish = $_POST['dish'];
$facebook = $_POST['facebook'];
$weibo = $_POST['weibo'];
$jiange = $_POST['jiange'];
$comment = $_POST['comment'];
$timestamp = date("Y-m-d H:i:s",time());
$type = "初中";

$sql = "INSERT INTO address (name, highschool, major,qq,email,work,district,phone,birthday,dream,hobby,suggest,dish,facebook,weibo,jiange,comment,time,type) VALUES ('$name','$highschool','$major','$qq','$email','$work','$district','$phone','$birthday','$dream','$hobby','$suggest','$dish','$facebook','$weibo','$jiange','$comment','$timestamp','$type');";
$add1 = mysql_query($sql);
if(!$add1){echo "part 1 wrong!";}



echo "<script>alert('感谢录入，页面跳转至通讯录列表！'); location.href = 'check.php'</script>";



?>