<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/main.js"></script>
		<style>
#share:hover,#find:hover{cursor:pointer;}
#ind_share:hover,#ind_find:hover{color:black;background:white;cursor:pointer;}
		</style>
		<script>
$(document).ready(function(){
	$("#share").hover(function(){
		$(this).attr("src","./img/share_hover.png");
	}, function(){
		$(this).attr("src", "./img/share.png");
	});
	$("#find").hover(function(){
		$(this).attr("src","./img/find_hover.png");
	}, function(){
		$(this).attr("src", "./img/find.png");
	});
});
function Go(){
	$('html, body').animate({ scrollTop: $("#area2").offset().top }, 1000);
}
		</script>
	</head>
	<body style="margin:0;font-family:Microsoft JhengHei;overflow-x:hidden ">
	    <div id="navigation" class="no-scroll">
			<span id="fbicon"><a href="https://www.facebook.com/MSPTaiwan" target="_blank"><img src="img/fbicon.png" style="width:100%" /></a></span>
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
							<a id="buttonG" href="comment.php">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="login.php">登入</a>
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
					<img id="share" src="./img/share.png" style="z-index:200;position:absolute;left:300px;height:100px" onClick="Go();"/>
					<img id="find" src="./img/find.png" style="z-index:110;position:absolute;left:300px;top:90px;height:100px" onClick="Go();"/>
				</div>
			</div>
		</div>
		<div id="area2" style="height:700px;position:absolute;width:100%;z-index:-1;top:850px;">
			<img src="./img/bk.png" style="width:100%; z-index:-1; position:absolute; top:0"/>
			<div>
				<img src="./img/pic_ind.png" style="position:absolute;top:250px;left:230px;width:200px"/>
				<img src="./img/share_ind.png" style="position:absolute;top:130px;left:200px;height:150px"/>
				<img src="./img/find_ind.png" style="position:absolute;top:450px;left:600px;height:130px"/>
				<div style="position:absolute;top:270px;left:450px;color:white;font-size:25px;">
					食物煮太多吃不完太浪費嗎？<br/>
					快來把你自己的食物和大家一起分享！<br/><br/>
					<span id="ind_share" style="border:1px solid white;padding:5px 20px;" onClick="location.href='post.php'" >-- Share --</span>
				</div>
				<div style="position:absolute;top:570px;left:750px;color:white;font-size:25px;">
					懷念家裡多人一起相聚吃飯的時刻嗎？<br/>
					是不是對外時感到很膩呢？<br/>
					立即來尋找你附近分享食物的食友！<br/><br/>
					<span id="ind_find" style="border:1px solid white;padding:5px 20px;" onClick="location.href='list.php'">-- Find --</span>
				</div>
			</div>
		</div>
	</body>
</html>
