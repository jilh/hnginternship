<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>I'm Stephen</title>
		<style type="text/css">
			body{
					background: #f2f2f2;
					font-family: 'arial';
				}
				.nav{
					width: 80%;
					margin-left: 10%;
					margin-right: 10%;
				}
				.brand{
					float: left;
					display: inline-block;
					font-size: 24px;
					text-decoration: none;
					color: #000;
					font-family: 'arial';
					font-style: regular;
					}
				.nav-list{
					float: right;
					margin-top: 0;
				}
				.nav-list > li{
					display: inline-block;
					text-align: left;
				}
				.nav-list > li > a{
					text-decoration: none;
					color: #000;
					font-size: 18px;
					margin-left: 10px;
					font-style: regular;
				}
				.clear{clear: both;}
				
				.main{
					width: 600px;
					height: 400px;
					position: absolute;
					left: 0;
					right: 0;
					top: 0;
					bottom: 0;
					margin: auto;
					text-align: center;
				}
				.main > h1{
					font-size: 48px;
					}
				.main > h3{
					font-size: 24px;
				}
				.main > h6 {
					font-size: 14px;
				}
			
		</style>
	</head>
	
	<body>
		<div class="nav">
			<a href="#" class="brand">HNG Internship</a>
			<nav>
				<ul class="nav-list">
					<li><a href="#">home</a></li>
					<li><a href="#">about me</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
		<div class="main">
			<h1>Date: <?php date_default_timezone_set("Europe/London"); echo date("F j, Y"); ?> Time: <?php echo date("h:ia"); ?></h1>
			<h2>Hi! I'm Afolayan Stephen</h2>
			<h3>I'm a lover of tech, i just got my hands on an opportunity to learn,
			and i'm loving every bit of it.</h3>
			
			<h3>I love hotels.ng internship</h3>
		</div>
	</body>
</html>