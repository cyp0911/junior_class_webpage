<?php
include "conn.php";
echo "<h2>数据库连接成功!</h2>";
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!DOCTYPE html>
<html lang="zh">

<head>
<title>怡海初三二班老乡会通讯录</title>
<!-- Bootstrap -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome-->
<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="table/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="table/css/demo.css" />
<link rel="stylesheet" type="text/css" href="table/css/component.css" />



</head>


<body>
<div class="container">
<div class="component">
				<table class="overflow-y">
                	<caption align="center"><h2>怡海初三2同学通讯录</h2><br>
                    <p>左右拖动查看更多信息</p>
                    </caption>
					<thead>
						<tr>
                            <th> 姓名 </th>
                            <td> 编号 </td>
                            <td> 毕业后去向</td>
                            <td> 职业/专业</td>
                            <td> QQ号码</td>
                            <td> email</td>
                            <td> 现在单位</td>
                            <td> 现在位置</td>
                            <td> 电话</td>
                            <td> 生日</td>
                            <td> 爱好</td>
                            <td> 喜欢的菜</td>

                        </tr>
					</thead>
					<tbody>
<?php
	$sql = mysql_query("select * from address WHERE type = '初中' OR type = '本人'");
	$info = mysql_fetch_array($sql);
	$i = 1;
	do{
?>


<tr>
	<th> <?php echo $info[name]; ?> </th>
    <td> <?php echo $i ?> </td>
    <td> <?php echo $info[highschool]; ?> </td>
    <td> <?php echo $info[major]; ?> </td>
    <td> <?php echo $info[qq]; ?> </td>
    <td> <?php echo $info[email]; ?> </td>
    <td> <?php echo $info[work]; ?> </td>
    <td> <?php echo $info[district]; ?> </td>
    <td> <?php echo $info[phone]; ?> </td>
    <td> <?php echo $info[birthday]; ?> </td>
    <td> <?php echo $info[hobby]; ?> </td>
    <td> <?php echo $info[dish]; ?> </td>


</tr>

<?php
	$i = $i+1;
	}while($info = mysql_fetch_array($sql));


?>
</tbody>
</table>
</div>
</div>						
					
 <div class="container">
<h2><button href="#" class="btn btn-danger pull-center" id="backin">返回之前页面</button></h2>
</div>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="google/jquery.min.1.11.3.js"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="google/jquery.ba-throttle-debounce.min.js">		 	</script>
	<script src="js/jquery.stickyheader.js"></script>
    <script>
    document.getElementById("backin").onclick = function () {
    location.href = "index.php";
};
</script>

</html>
