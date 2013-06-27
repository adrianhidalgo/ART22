<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Arts 22</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="spanish">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Paula Joglar">
	<meta name="charset" content="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/style_ie6.css" />
	<![endif]-->
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/style_ie7.css" />
	<![endif]-->
	
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/style_ie8.css" />
	<![endif]-->
		<link rel="stylesheet" href="colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>		
</head>
<body>
	<div class="cont">
		<div id="header">
			<div class="hdr_left">
				<h1><a href="index.php">ARTS 22</a><br/>
					<span>Connecting you to Latin America's <br/>
					contemporary art scene</span>
				</h1>
				<ul class="nav">
					<li><a href="map.php">BY CITY</a></li>
					<li><a href="calendar2.php">Calendar</a></li>
					<li><a href="abc.php">Alphabetic search </a></li>
					<li><a href="best.php">Best of the week</a></li>
					<li><a href="add.php">Add</a></li>
				</ul>
			</div>
			<div class="hdr_right">
				<div class="options">
					<ul>
						<li class="register"><a class="ajax" href="inc/inc_register.php">Register</a></li>
						<li class="login"><a class="log group1" href="inc/inc_login.php">Login</a></li>
						<li class="languages"><a href="">Select Languages</a></li>					
					</ul>
				</div>
				<div id="search">
                    <input type="text" name="service" placeholder="Search" class="s_header">
				</div>
				<div class="clearfix"></div>
				<div class="subnav">
					<ul>
						<li><a href="">ABOUT US</a></li>
						<li><a href="">CONTACT</a></li>
					</ul>			
				</div>
			</div>
			<div class="clearfix"></div>	
		</div><!--end header -->
		<div class="clearfix"></div>
		<div class="cont_ttl">
			<h3>AGUST 2012</h3>
			<div class="line_color"><a href="">View all</a></div>	
		</div>	
		<ul class="cities">
			<li><a href="">BUENOS AIRES</a></li>
			<li><a href="">RIO DE JANEIRO</a></li>
			<li><a href="">SAN PABLO</a></li>
		</ul>
		<div class="cont_calendar_days">
			<div class="expo_day">
				<h5>AUG <span>2, 2012</span></h5>
				<div class="line_color"></div>	
			</div>
			<div class="detail_img"><img src="img/calendar_day_big.jpg" alt=""/></div>
			<div class="detail_text">
				<ul class="start">
					<li><img alt="" src="img/start_color.png"></li>
					<li><img alt="" src="img/start_color.png"></li>
					<li><img alt="" src="img/start_color.png"></li>
					<li><img alt="" src="img/start_gray.png"></li>
					<li><img alt="" src="img/start_gray.png"></li>
				</ul>
				<a class="buy" href="">BUY TICKET</a>		
				<div class="clearfix"></div>
				<h6>Name of the gallery</h6>
				<div class="clearfix"></div>				
				<address>11 West 53 Street  New York, <br/>
				555 W 24th St, New York<br/>
				<span> +1 212-741-1111</span></address>
			
				<ul class="expo_days">
					<li><p>Wednesday<span>10:30 a.m.5:30 p.m.</span></p></li>
					<li><p>Wednesday<span>10:30 a.m.5:30 p.m.</span></p></li>				
				</ul>
				<p class="expo_detail">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>	
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<div id="calendar_dates">
			<div class="title"><h4>Calendar</h4></div>
			<div class="day_box">
				<a href=""><h3 class="date">28 <span>Septiembre</span></h3></a>
				<div class="place"><p>Mona Hatoum</p></div>
				<p class="description">Shift
				Oudenarder 16-20    |    September 08 October 13, 201</p>			
			</div><!--end day_box-->
			<div class="day_box">
				<a href=""><h3 class="date">28 <span>Septiembre</span></h3></a>
				<div class="place"><p>Mona Hatoum</p></div>
				<p class="description">Shift
				Oudenarder 16-20    |    September 08 October 13, 201</p>			
			</div><!--end day_box-->
			<div class="day_box">
				<a href=""><h3 class="date">28 <span>Septiembre</span></h3></a>
				<div class="place"><p>Mona Hatoum</p></div>
				<p class="description">Shift
				Oudenarder 16-20    |    September 08 October 13, 201</p>			
			</div><!--end day_box-->			
		</div><!--end calendar-->
		<div class="clearfix"></div>
	</div><!--end cont-->	
</body>
</html>