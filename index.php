<!DOCTYPE html>
<html lang="zh">

<head>
	<title>怡海初三2</title>
  	<meta charset="utf-8">
  	<meta name="怡海初三2" content="北京八中怡海分校">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="google/Lato.css" rel="stylesheet" type="text/css">

  <link href="google/Montserrat.css" rel="stylesheet" type="text/css">

  <script src="google/jquery.min.1.11.1.js"></script>

  <script src="google/bootstrap.min.js"></script>

    
        <script type="text/javascript" src="inc/TimeCircles.js"></script>
        
        <link rel="stylesheet" href="inc/TimeCircles.css" />
        
        <!--new countdown-->
	

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="google/Montserrat400700.css" rel="stylesheet" type="text/css">
    <link href="google/Kaushan Script.css" rel='stylesheet' type='text/css'>
    <link href="google/Droid Serif.css" rel='stylesheet' type='text/css'>
    <link href="google/Roboto Slab.css" rel='stylesheet' type='text/css'>
  	<link rel="icon" type="image/ico" href="img/yihai.ico"/>
    
    <!--hover-->
     <link rel="stylesheet" href="css/main.css"/>
    <script src="scripts/app.js"></script>

	

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://maps.googleapis.com/maps/api/js"> </script>
    <!-- Jquery -->
 	<script src="js/modernizr.2.5.3.js"></script>
    
</head>

<body id="page-top" class="index">

<?php 
include "conn.php";
date_default_timezone_set('Asia/Chongqing');
include "subpage/constellation.php";

?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">YHC32</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">顶部</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#portfolio">相册</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">关于</a>
                    </li> -->
                    
                    <li>
                        <a class="page-scroll" href="#contact">填写同学录</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" data-target="#update" href="#update">补全/编辑资料</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="check.php">通讯录</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#picture">上传照片</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://yinpengchen.com">返回主页</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>        
    
    
    <div class="carousel-caption">
			<div class="intro-text">
                <div class="intro-lead-in">怡海初三二班</div>
                <div class="intro-heading">2015毕业十周年</div>
                <a href="#contact" class="page-scroll btn btn-xl">了解更多</a>
            </div>
    </div>
    
    
    
        	<div id="myCarousel" class="carousel slide" data-ride="carousel">
            
    <!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
      			<li data-target="#myCarousel" data-slide-to="4"></li>
      			<li data-target="#myCarousel" data-slide-to="5"></li>

    		</ol>
    <!-- Wrapper for slides -->
    			<div class="carousel-inner" role="listbox">
      				<div class="item active">
        				<img class="img-responsive" src="img/quanban.gif" alt="2ndbiye" width="1200" height="700">                 
      				</div>

					<div class="item">
        			<img class="img-responsive" src="img/studium.gif" alt="zhibo" width="1200" height="700">
              		</div>
                    
      				<div class="item">
        				<img class="img-responsive" src="img/dongpo.gif" alt="beipinglou" width="1200" height="700">
      				</div>
    
      				<div class="item">
        				<img class="img-responsive" src="img/ligou.gif" alt="yangxiezi" width="1200" height="700">
              		</div>
                    
                    <div class="item">
        			<img class="img-responsive" src="img/catshort.gif" alt="quanweidao" width="1200" height="700">
              		</div>
					<div class="item">
        			<img class="img-responsive" src="img/sichuan.gif" alt="zhibo" width="1200" height="700">
              			</div>
        			</div>      

    <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
         </div>
    </header>
    
    <div class="row" align="center">
	</div>
    
    
	<section id="birth" class="bg-light-gray">
        <div class="container" id="birthhold">
             <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black">生日提醒</h2>
                    <h3 class="section-subheading "><b>别忘了庆贺生日哦~</b></h3>
                </div>
            </div>
            
            <div class="row">            
            
                       
				<?php
                        $ii = 1;
            
            $runner = mysql_query( "SELECT * FROM address WHERE (type = '初中' OR type = '本人') AND (MONTH(birthday) = MONTH(NOW())) ORDER BY DAYOFMONTH(birthday) ASC");
            
            if (!$runner) {
                echo 'Could not run query: ' . mysql_error();
                exit;
            }


while( $row = mysql_fetch_row( $runner ) )
{
$Uid[$ii] = $row[0];
$Uname[$ii] = $row[1];
$Ubd[$ii] = $row[10];
$ii++;
}
	if($Ubd != NULL){
				?>
                <div class="col-lg-3" align="center" style="color:black">
                <h3 style="color:black">本月生日同学：</h3>
                
                
				
				
                <br />

      <?php
	  			for($bi=1;$bi < ($ii);$bi++) {
					$birthday = $Ubd[$bi];
					$age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
					if (date('m', time()) == date('m', strtotime($birthday))){  
  
    				if (date('d', time()) > date('d', strtotime($birthday))){  
    				$age++;  
    				}  
					}elseif (date('m', time()) > date('m', strtotime($birthday))){  
   					$age++;  
					}
				if(date('d', strtotime($birthday)) > date('d', time())){$age++;} 
				if(date('d', strtotime($Ubd[$ii-1])) >= date('d', time())){$hasthis = 0;}
				else{$hasthis = 1;} 

               ?> 	               		
               		<h4>寿星 No.<?php echo "$bi:  $Uname[$bi]"; ?></h4>
                    <div class="morph pic">
  					<img src="img/team/<?php echo $Uid[$bi]; ?>.JPG" class="img-responsive person birthimg" alt="<?php echo $Uid[$bi]; ?>.JPG"></div>
                    <h4><strong><?php echo $age; ?>岁</strong><b>生日</b>:</h4>&nbsp; <h3><strong><?php echo date('m月d日', strtotime($Ubd[$bi])); ?></strong></h3><hr style="color:black">
                   
                  
                    
                    <?php
					
					
					  ?> 

                    <br />
                    
                <?php
											}
		?>		</div>
        <?php
					}
	
				
				$runner2 = mysql_query("SELECT * FROM address WHERE (type = '初中' OR type = '本人') AND (MONTH(birthday) = MONTH(NOW())+1 OR MONTH(birthday) = MONTH(NOW())- 11) ORDER BY DAYOFMONTH(birthday) ASC");
				if (!$runner2) {
    			echo 'Could not run query: ' . mysql_error();
    			exit;
				}
				
          
			
				$g = 1;
				while( $row2 = mysql_fetch_row( $runner2 ) )
				{
				$Uid1[$g] = $row2[0];
				$Uname1[$g] = $row2[1];
				$Ubd1[$g] = $row2[10];
				$g++;
				}
				if ($row2 != NULL && $row !=NULL){
					?>
				
				
    		<div class="col-lg-6" align="center" style="color:black">
                <h1 style="color:red">UPCOMING,BIRTHDAY!!!</h1>
<?php				
			if($hasthis == 0){ 
?>
				
				<img src="img/team/<?php echo $Uid[$ii-1]; ?>.JPG" class="img-responsive img-circle person birthimg" alt="<?php echo $Uid[$ii-1]; ?>.JPG">
                <h2><strong>今天距离<h1><?php echo $Uname[$ii-1];?>
                <?php $cosel1 = birthext(date('Y-m-d', time()) > date('m', strtotime($birthday))); 
						  echo "$cosel1[xz]<br>";
						  echo "生肖：$cosel1[sx]<br>";
						  if($birthday % 12 == 0){echo "本命年";}
						  if(date('md', time()) == date('md', strtotime($birthday))){echo "<script>alert('今天有人过生日！！祝贺他吧~');</script>";}
					 ?>
                
                </h1><?php echo $age; ?>岁</strong><b>生日，还有</b>:</h2>&nbsp; 
                    
                    <?php 
					if(date('m', strtotime(now)) == 12){
					$nextyear = date('Y', strtotime(now))+1;}
					else {$next = date('Y', strtotime(now));}
					?>
                    <div id="DateCountdown" data-date="<?php echo "$nextyear-".date('m-d', strtotime($Ubd[$ii-1])) ?> 00:00:00" style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: "></div>
            
    <script>
		$(document).ready(function(){ 
            $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });
			});


        </script> 
                    <?php
			}else if($hasthis == 1){ 
					$birthday = $Ubd1[1];
				
					$age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
					if (date('m', time()) == date('m', strtotime($birthday))){  
  
    				if (date('d', time()) > date('d', strtotime($birthday))){  
    				$age++;  
    				}  
					}elseif (date('m', time()) > date('m', strtotime($birthday))){  
   					$age++;  
					}
					$age++;  
			?>
            		
       				<img src="img/team/<?php echo $Uid1[$g-1]; ?>.JPG" class="img-responsive birthimg" alt="<?php echo $Uid1[$g-1]; ?>.JPG">
                    
                    <h2><strong>今天距离<h1>
					
                    <?php $cosel1 = birthext(date('Y-m-d', time()) > date('m', strtotime($birthday))); 
						  echo "$cosel1[xz]<br>";
						  echo "生肖：$cosel1[sx]<br>";
						  if($birthday % 12 == 0){echo "本命年";}
						  if(date('md', time()) == date('md', strtotime($birthday))){echo "<script>alert('今天有人过生日！！祝贺他吧~');</script>";}
					 ?>
                   
					<?php echo $Uname1[$g-1];?></h1><?php echo $age; ?>岁</strong><b>生日，还有</b>:</h2>&nbsp; 
                    
                    <?php 
					if(date('m', strtotime(now)) == 12){
					$nextyear = date('Y', strtotime(now))+1;}
					else {$next = date('Y', strtotime(now));}
					?>
                    <div id="DateCountdown" data-date="<?php echo "$nextyear-".date('m-d', strtotime($Ubd1[$g-1])) ?> 00:00:00" style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: "></div>
            
    <script>
		$(document).ready(function(){ 
            $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });
			});


        </script> 
        
        
        
             <?php

					
				
					
			}
			
			
			?>


				
    		</div>
            
            
            <div class="col-lg-3" align="center" style="color:black">
            	<h3 style="color:black">下月生日同学：</h3><br/>
            
			<?php
				
				
				if($Ubd1 != NULL){
				
				for($bi=1;$bi < ($g);$bi++) {
					$birthday = $Ubd1[$bi];
					$age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
					if (date('m', time()) == date('m', strtotime($birthday))){  
  
    				if (date('d', time()) > date('d', strtotime($birthday))){  
    				$age++;  
    				}  
					}elseif (date('m', time()) > date('m', strtotime($birthday))){  
   					$age++;  
					}  
					
					
               ?> 	               		
               		<h4>寿星 No.<?php echo "$bi:  $Uname1[$bi]"; ?></h4>
                    
                     <div class="morph">
                    <img src="img/team/<?php echo $Uid1[$bi]; ?>.JPG" class="img-responsive person birthimg" alt="<?php echo $Uid1[$bi]; ?>.JPG"></div>
                     
                    <h4><strong><?php echo $age+1; ?>岁</strong><b>生日</b>:</h4>&nbsp; <h3><strong><?php echo date('m月d日', strtotime($Ubd1[$bi])); ?></strong></h3> <hr>
                   
                    
                      
                    
                    <br />
                <?php
											}
								}
				
			?>
            
            
            
            </div>	
    		
    <?php    }else{
		?>
        <h1 align="center">近期无人过生日~</h1>
        
        <?php
		
		
		}
	?>
    	
            </div>
        </div>
    
    </div>    
  </section>
  
  
  





    <!-- Services Section -->
    <!--
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Portfolio Grid Section -->

<!--
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">珍贵视频</h2>
                    <h3 class="section-subheading text-muted">点击观看</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4></h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

-->
    <!-- About Section -->
    <!--
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Team Section -->
    
<?php 
include "subpage/team.php";
?>    


<?php 
include "subpage/words.php";
?>    

    
    <!-- Clients Aside -->
    <!--
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    -->
    
    
    
    
 <?php include 'subpage/modal.php'
 ?>

  
    
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">录入信息</h2>
  		<p class="text-center"><em>请填写相关信息，如要补全/修改已注册信息，请点击主菜单选项</em>
         </p>
<!--
  <div class="row">
    <div class="col-md-4">
      <p>Please contact me</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Wolfville, Canada</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +1 902-300-8932</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: cyp0911@gmail.com</p>	   
    </div> -->
  
        
  
  
  
  	<form method="post" action="admsg.php" class="my-form" role="form">
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="姓名" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="highschool" name="highschool" title="高中" placeholder="高中/大学（学院）或者入伍，经商" type="text">
          </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="major" name="major" placeholder="职业或专业" type="text" required>
        </div>
      </div>
      
      <div class="row">
      <div class="col-sm-4 form-group">
          <input class="form-control" id="qq" name="qq" placeholder="QQ" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="email" name="email" id="email" placeholder="Email地址" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="work" name="work" placeholder="现在单位" type="text" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4 form-group" align="center">
        	<label for="sel2"><span style="color:yellow;">现在位置:</span></label>
          <select name="district" class="form-control" id="sel2" required>
    			<option value="北京">北京</option>
    			<option value="中国">华东</option>
   				<option value="华北">华北</option>
   				<option value="华南">华南</option>
                <option value="北京">西部省份</option>
                <option value="东北">东北</option>
                <option value="海外">海外</option>
  		  </select> 
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="电话" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
        	<label for="birthday"><span style="color:yellow">生日：(例如：12-30-1990)</span></label>
          <input class="input-sm" type="date" id="birthday" name="birthday" min="1950-12-01" max="2010-01-01" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="dream" name="dream" placeholder="人生梦想" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="text" name="hobby" id="hobby" placeholder="爱好" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="suggest" name="suggest" placeholder="一个词形容自己，将显示在个人头像下" type="text" required>
        </div>
      </div>
      
      <div class="row">
      	<div class="col-sm-4 form-group" align="center">
        	<label for="sel2"><span style="color:yellow;">最喜欢的菜品:</span></label>
          <select name="dish" class="form-control" id="sel2" required>
    			<option value="北京菜">北京菜</option>
    			<option value="川菜">川菜</option>
   				<option value="粤菜">粤菜</option>
   				<option value="西餐">西餐</option>
                <option value="火锅">火锅</option>
                <option value="日韩料理">日韩料理</option>
                <option value="烧烤">烧烤</option>
  		  </select> 
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="weibo" name="weibo" placeholder="微博（用户名，没有可不填）" type="text" >
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="text" name="facebook" id="facebook" placeholder="facebook(用户名，没有可不填)" >
        </div>
      </div>
              <div class="row form-inline" align="center">
      <h3>觉得怡海初三2多久聚一次合适：<input class="radio-inline" type="radio" name="jiange" value="year" checked>每年一次</h3>
  				<h3>  <input class="radio-inline" type="radio" name="jiange" value="half">每半年一次</h3>
               <h3>   <input class="radio-inline" type="radio" name="jiange" value="season">每季度一次</h3>
               <h3>   <input class="radio-inline" type="radio" name="jiange" value="month">每个月都聚</h3>
       </div>
        
      <div class="form-group">
							<textarea class="form-control" name="comment" id="comment" rows="5" cols="25" style="resize:none;" required placeholder="想对初中同学说的话"></textarea>
	  </div>
      
      
            
      <!--
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea> -->
      <div class="row">
        <div class="col-md-12 form-group">
           <h2 style="red">友情提示：请先提交资料再上传照片。。防止数据丢失，谢谢</h2>
          <button class="btn btn-info pull-right" id="submitbtn" type="submit">提交</button>
        </div>
      </div>	
     </form> 

        </div>
    </section>
    
    <section id="picture">
    	<div class="container">
        	<h2>照片上传，接受任何照片</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    选择需要上传的照片：然后点击上传
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-info" type="submit" value="上传图片" name="submit">
</form>
</div>       
    </section>
    
    
    

<!-- Add Google Maps -->
<div class="jumbotron" >
	<div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-11">
    	<h2>相遇地点：北京八中怡海分校</h2>
      </div>
    </div>
		<div id="googleMap">
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		var myCenter = new google.maps.LatLng(39.835189, 116.303790);

		function initialize() {
		var mapProp = {
		center:myCenter,
		zoom:12,
		scrollwheel:true,
		draggable:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		  
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		  
		var marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
  		});

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
  			content:"<b>北京八中怡海分校</b>"
  		});

		google.maps.event.addListener(marker, 'click', function() {
  			infowindow.open(map,marker);
  		});
		}
  

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		</div>
</div>
<!-- containner tag above-->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <!--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>-->
                    <span class="copyright">Copyright &copy; 海狸先生 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"></a>
                        </li>
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    




    <!-- Plugin JavaScript -->
    <script src="google/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    
    

</body>

</html>
