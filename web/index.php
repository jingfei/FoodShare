<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
	</head>
	<body style="margin:0;font-family:Microsoft JhengHei ">
	    <div id="navigation" class="no-scroll">
			<span id="fbicon"><a href="https://www.facebook.com/MSPTaiwan" target="_blank"><img src="img/fbicon.png" style="width:100%" /></a></span>
			<a id="buttonCircle" href=""><img src="img/circle.png" style="position:fixed;bottom:20px;right:20px;z-index:20;width:30px;" /></a>
		    <div id="navigation-wrap">
		   		<div id="nav">
					<ul id="nav-ul">
						<li id="active">
							<a id="buttonH" href="">HOME</a>
						</li>
						<li></li>
						<li>
							<a id="buttonI" href="map.php">地圖尋找</a>
						</li>
						<li>
							<a id="buttonA" href="list.php">列表尋找</a>
						</li>
						<li>
							<a id="buttonL" href="post.php">分享美食</a>
						</li>
						<li>
							<a id="buttonG" href="">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="">登入</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div style="height:700px;position:absolute;width:100%;top:0;z-index:-1">
			<img src="./img/main.jpg" style="width:100%; z-index:-1; position:absolute; top:0"/>
			<div style="height:50%; background:rgba(0,0,0,0.4); width:100%; z-index:100; position:absolute; top:30%;padding:10px 230px;">
				<img src="./img/logo.png" style="height:95%;position:absolute; "/>
				<div style="position:absolute;font-size:2.5em;line-height:3em;top:60px;">
					<img src="./img/share.png" style="position:absolute;left:320px;height:90px"/>
					<img src="./img/find.png" style="position:absolute;left:290px;top:130px;height:103px"/>
				</div>
			</div>
		</div>
	</body>
</html>
