<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" class="ui" href="./css/semantic.min.css">
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
		<script src="./js/main.js"></script>
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
						<li>
							<a id="buttonG" href="comment.php">我要評價</a>
						</li>
						<li id="active">
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

		<?php
			session_start();
			$account = $_POST["account"];
			$password = $_POST["passwd"];
			if ($account != "" && $password != "") {
				require_once "openDB.php";
				$query = "SELECT name, password FROM users WHERE name='{$account}'";
				$result = mysqli_query($link, $query);
				$row = mysqli_fetch_assoc($result);
				if ($account == $row["name"] && md5($password) == $row["password"]) {
					$_SESSION['username'] = $account;
					echo '<h1 style="margin:50px;color:white;">您已經成功的登入囉~</h1>';
				}
			}
			else if ($_SESSION['username'] != "") {
				echo '<form id="applyForm" class="ui large form error segment" method="post" action="login.php" style="background-color:rgba(255,255,255,0.8); width:40%; margin:50px auto">
					<font color=red> * 必要填寫欄位</font><br>
					<h3 class="ui dividing header">您確定要登出嗎?</h3>

					<div class="field">
						<button class="ui blue submit button" type="submit">登出</button>
					</div>
				</form>';
			}
			else {
				echo '<form id="applyForm" class="ui large form error segment" method="post" action="login.php" style="background-color:rgba(255,255,255,0.8); width:40%; margin:50px auto">
					<font color=red> * 必要填寫欄位</font><br>
					<h4 class="ui dividing header">登入</h4>
					<div class="required field eight wide">
						<label for="topic">帳號</label>
						<input type="text" required id="topic" name="account" class="required" size="10" maxlength="10" />
						<br>
					</div>

						<div class="required field eight wide">
							<label for="year">密碼</label>
							<input type="password" required id="year" name="passwd" class="required" maxlength="50" size="15" />
							<br>
						</div>

					<div class="field">
						<button class="ui blue submit button" type="submit">登入</button>
					</div>
				</form>';
			}
		?>



	</body>
</html>
