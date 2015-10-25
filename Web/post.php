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
							<a id="buttonG" href="comment.php">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="">登入</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div style="position:fixed">
			<img style="width:100px;position:fixed;left:20px;bottom:50px;" src="./img/rice.png" />
			<img style="width:100px;position:fixed;right:20px;top:200px;" src="./img/fish.png" />
		</div>
		<form id="applyForm" class="ui large form error segment" method="post" action="./upload.php" enctype="multipart/form-data" style="background-color:rgba(255,255,255,0.8); width:80%; margin:50px auto">
			<font color=red> * 必要填寫欄位</font><br>
			<h4 class="ui dividing header"></h4>
			<div class="required field">
				<label for="topic">美食名稱</label>
				<input type="text" placeholder="美食名稱" required id="topic" name="topic" class="required" size="25" maxlength="25" />
				<br>
			</div>
			<div class="five fields">
				<div class="required field">
					<label for="year">時間</label>
					<input type="text" placeholder="西元年" required id="year" name="year" class="required" maxlength="50" size="25" />
					<br>
				</div>
				<div class="field">
					<label>&nbsp;</label>
					<input type="text" placeholder="月" required  id="month" name="month" class="required" maxlength="50" size="25" />
					<br>
				</div>
				<div class="field">
					<label>&nbsp;</label>
					<input type="text" placeholder="日" required  id="day" name="day" class="required" maxlength="50" size="25" />
					<br>
				</div>
				<div class="field">
					<label>&nbsp;</label>
					<input type="text" placeholder="時 (24小時制)" required  id="hour" name="hour" class="required" maxlength="50" size="25" />
					<br>
				</div>
				<div class="field">
					<label>&nbsp;</label>
					<input type="text" placeholder="分" required  id="minute" name="minute" class="required" maxlength="50" size="25" />
					<br>
				</div>
			</div>
			<div class="required field">
				<label for="descriptiion">敘述</label>
				<input type="text" placeholder="敘述" required  id="content" name="content" class="required" size="25" maxlength="40" />
				<br>
			</div>
			<div class="required field">
				<label for="eatPlace">用餐地點</label>
				<input type="text" placeholder='(若無則填"No")' required  id="eatPlace"  name="eatPlace" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="required field">
				<label for="address">地址</label>
				<input type="text" placeholder="地址" id="address" required   name="address" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="required two fields">
				<div class="required field">
					<label for="price">價錢</label>
					<input type="text" placeholder="價錢" required  id="price"  name="price" class="required" maxlength="21" size="25" />
					<br>
				</div>
				<div class="required field">
					<label for="quantity">份數</label>
					<input type="text" placeholder="人數" required  id="quantity"  name="quantity" class="required" maxlength="21" size="25" />
					<br>
				</div>
			</div>
			<div class="required field">
				<label for="expire_time">賞味期限</label>
				<input type="text" placeholder="時間長度 (格式：HH:MM:SS)" required  id="expire_time"  name="expTime" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="require field">
				<label for"pic">圖片上傳</label>
				<input type="file" placeholder="圖片上傳" required  id="pic" name="pic" class="required" maxlength="21" size="25" />
				<br>
			</div>
			<div class="field">
				<button class="ui blue submit button" type="submit">報名</button>
			</div>
		</form>
	</body>
</html>
