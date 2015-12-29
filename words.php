<?php

$i=1;
	$sql1 = mysql_query("select * from address WHERE (type = '初中' OR type = '本人')");
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
	$backup = $numbers;
	
	$pnumber = $i-1;


	
?>        

<div class="container">
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                            
                            
 <?php    
   for($g=0;$g<$pnumber;$g++)
   {	   $order = array_shift($numbers);
?>
                                <li data-target="#quote-carousel" data-slide-to="<?php echo $g; ?>" class="<?php if($g == 0) echo "active"?>"><img class="img-responsive " src="img/team/<?php echo $save["$order,id"]; ?>.JPG" alt="<?php echo $save["$order,id"]; ?>.JPG">
                                </li>                               
                                
    <?php  } ?>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                             <div class="carousel-inner text-center">
<?php                           
for($g=0;$g<$pnumber;$g++)
   {	   $order = array_shift($backup);
   
?>
                                <!-- Quote 1 -->
                                <div class="item <?php if($g == 0) echo "active"?>">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p><h2><?php echo $save["$order,comment"]; ?>.</h2></p>
                                                <small><?php echo $save["$order,name"]; ?></small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                
   <?php    }   ?>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
</div>
<hr class="divider"/>