<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" class="ui" href="./css/semantic.min.css">
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
		<link rel="stylesheet" href="./rate/jquery.raty.css" type="text/css"/>
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/semantic.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="./js/main.js"></script>
		<script src="./rate/jquery.raty.js" type="text/javascript" charset="utf-8"></script>
		<script>
		$(document).ready( function(){
			$('select.dropdown').dropdown();
			$('#rate').raty();
		});
		</script>
	</head>
	<body style="margin:0;font-family:Microsoft JhengHei; background-image:url('./img/wood.jpg'); background-size:100% 100%;">
	    <div id="navigation" class="no-scroll">
		    <div id="navigation-wrap">
		   		<div id="nav">
					<ul id="nav-ul">
						<li>
							<a id="buttonH" href="index.php">HOME</a>
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
						<li id="active">
							<a id="buttonG" href="">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="">登入</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div style="position:fixed">
			<img style="width:100px;position:fixed;left:20px;bottom:50px;" src="./img/fish.png" />
			<img style="width:100px;position:fixed;right:20px;top:200px;" src="./img/soup.png" />
		</div>
		<form id="applyForm" class="ui large form error segment" method="post" action="./upload.php" enctype="multipart/form-data" style="background-color:rgba(255,255,255,0.8); width:80%; margin:50px auto">
			<font color=red> * 必要填寫欄位</font><br>
			<h4 class="ui dividing header"></h4>
			<div class="required field">
				<label for="cplatform">我想為這則食記評價</label>
				<select name="platform" id="cplatform" class="ui dropdown">
					<option value="">請選擇</option>
					<option value="breakfast">
						黑客松早餐
	 				</option>					
					<option value="soda">
						黑客松汽水
					</option>	
				</select>
			</div>				
			<div class="requried field">
				<label for="star">評分</label>
				<div  id="rate"></div>
			</div>
			<div class="required field">
				<label for="topic">其他評論</label>
				<input type="text" placeholder="其他評論" required id="topic" name="topic" class="required" size="25" maxlength="25" />
				<br>
			</div>
			<div class="field">
				<button class="ui blue submit button" type="submit">送出</button>
			</div>
		</form>
	</body>
</html>
