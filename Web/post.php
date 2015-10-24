<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" class="ui" href="./css/semantic.min.css">
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
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
						<li id="active">
							<a id="buttonL" href="">分享美食</a>
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
		<form id="applyForm" class="ui large form error segment" method="post" action="" style="background-color:rgba(255,255,255,0.8); width:80%; margin:50px auto">	
			<font color=red> * 必要填寫欄位</font><br>
			<h4 class="ui dividing header"></h4>
			<div class="two field">
				<div class="required field">
					<label for="topic">美食名稱</label>
					<input type="text" placeholder="美食名稱" id="topic" name="topic" class="required" size="25" maxlength="25" />
					<br>
				</div>
				<div class="required field">
					<label for="time">時間</label>
					<input type="text" placeholder="時間" id="time" name="time" class="required" maxlength="50" size="25" />
					<br>
				</div>
			</div>
			<div class="required field">
				<label for="descriptiion">敘述</label>
				<input type="text" placeholder="敘述" id="content" name="content" class="required" size="25" maxlength="10" />
				<br>
			</div>
			<div class="required field">
				<label for="eatPlace">用餐地點</label>
				<input type="text" placeholder="用餐地點" id="eatPlace"  name="eatPlace" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="required field">
				<label for="address">地址</label>
				<input type="text" placeholder="地址" id="address"  name="address" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="required two fields">
				<div class="required field">
					<label for="price">價錢</label>
					<input type="text" placeholder="價錢" id="price"  name="price" class="required" maxlength="21" size="25" />
					<br>
				</div>
				<div class="required field">
					<label for="quantity">人數</label>
					<input type="text" placeholder="人數" id="quantity"  name="quantity" class="required" maxlength="21" size="25" />
					<br>
				</div>
			</div>
			<div class="required field">
				<label for="expire_time">時間長度</label>
				<input type="text" placeholder="時間長度" id="expire_time"  name="expire_time" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="require field">
				<label for"pic">圖片上傳</label>
				<input type="file" placeholder="圖片上傳" id="pic" name="pic" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="field">
				<button class="ui blue submit button" type="submit">報名</button>
			</div>
		</form>
	</body>
</html>
