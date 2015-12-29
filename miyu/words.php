<!doctype html>
<html lang="zhCN" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>只言片语</title>
</head>
<body>
<?php 	
include "../conn.php";




$i=1;
	$sql1 = mysql_query("select * from address");
	if(!$sql1){echo "sql fail";}
	$member = mysql_fetch_array($sql1);
	if($member == NULL){echo "member fail";}
	$save = array( "$i,id"=>"$member[id]","$i,comment"=>"$member[comment]","$i,work"=>"$i,$member[work]","$i,name"=>"$member[name]");
	do{
			$saverom = array( "$i,id"=>"$member[id]","$i,comment"=>"$member[comment]","$i,work"=>"$member[work]","$i,name"=>"$member[name]");
			$save = $save + $saverom;
		echo "<br>";
		$i=$i+1;
	}while($member = mysql_fetch_array($sql1));
	$numbers = range(1, $i-1);
	shuffle($numbers);


	
?>        


<div class="cd-testimonials-wrapper cd-container">
	<ul class="cd-testimonials">
<?php    
   for($g=0;$g<3;$g++)
   {	   $order = array_shift($numbers);
?>
		<li>
			<p><?php echo $save["$order,comment"]; ?>.</p>
			<div class="cd-author">
				<img src="../img/team/<?php echo $save["$order,id"]; ?>.JPG" class="img-responsive img-circle person" alt="<?php echo $save["$order,id"]; ?>.JPG">
				<ul class="cd-author-info">
					<li><?php echo $save["$order,name"]; ?></li>
                    <li><?php echo $save["$order,work"]; ?></li>
				</ul>
			</div>
		</li>

		
	<?php  }
	?>
	</ul> <!-- cd-testimonials -->

	<a href="#0" class="cd-see-all">查看全部</a>
</div> <!-- cd-testimonials-wrapper -->

<div class="cd-testimonials-all">
	<div class="cd-testimonials-all-wrapper">
		<ul>	
<?php    
   for($g=3;$g<$i-1;$g++)
   {	   $order = array_shift($numbers);
?>
    	    
			<li class="cd-testimonials-item">
				<p><?php echo $save["$order,comment"]; ?>.</p>
				
				<div class="cd-author">
					<img src="../img/team/<?php echo $save["$order,id"]; ?>.JPG" class="img-responsive img-circle person" alt="<?php echo $save["$order,id"]; ?>.JPG">
					<ul class="cd-author-info">
						<li><?php echo $save["$order,name"]; ?></li>
                    	<li><?php echo $save["$order,work"]; ?></li>
					</ul>
				</div> <!-- cd-author -->
			</li>
<?php
   }
?>
		</ul>
	</div>	<!-- cd-testimonials-all-wrapper -->

<a href="#0" class="close-btn">关闭</a>
</div> <!-- cd-testimonials-all -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
    document.getElementById("backin").onclick = function () {
    location.href = "../index.php";
};
</script>
</body>
</html>