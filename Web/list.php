<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/masonry.pkgd.min.js"></script>
		<script src="./js/main.js"></script>
		<link rel="stylesheet" href="./css/search.css" type="text/css"/>
		<style>
		.grid{ margin:10px 180px; }
		.grid-item {
			width: 300px;
			border:1px solid gray;
			border-radius:20px;
			margin-bottom:30px;
			background: -webkit-linear-gradient(#C6B198, #F1F1F1); /* For Safari 5.1 to 6.0 */
			background: -o-linear-gradient(#C6B198, #F1F1F1); /* For Opera 11.1 to 12.0 */
			background: -moz-linear-gradient(#C6B198, #F1F1F1); /* For Firefox 3.6 to 15 */
			background: linear-gradient(#C6B198, #F1F1F1); /* Standard syntax */
		}
		.grid-item img{
			border-radius: 20px;
		}
		.grid-item p{
			padding:0 20px;
		}
		</style>
		<script>
$(document).ready(function(){
});
$(window).load(function(){
	$("img").each(function(){
		var H = $(this).height() + 180;
		$(this).parent().css({"height": H});
	});
	$('.grid').masonry({
		columnWidth: 300,
		itemSelector: '.grid-item',
		gutter: 40
	});
});
		</script>
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
						<li id="active">
							<a id="buttonA" href="">列表尋找</a>
						</li>
						<li>
							<a id="buttonL" href="post.php">分享美食</a>
						</li>
						<li>
							<a id="buttonG" href="comment.php">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="login.php">
								<?php
									session_start();
									if (isset($_SESSION["username"]))
										echo "登出";
									else
										echo "登入";
								?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div style="position:fixed">
			<img style="width:100px;position:fixed;left:70px;bottom:150px;" src="./img/bread.png" /><br/><br/>
			<img style="width:100px;position:fixed;left:20px;bottom:50px;" src="./img/coffee.png" />
			<img style="width:100px;position:fixed;right:70px;top:100px;" src="./img/pizza.png" />
			<img style="width:100px;position:fixed;right:20px;top:200px;" src="./img/juice.png" />
		</div>
	<form class="search" method="post" action="list.php" style="padding:150px;height:10px">
		<input type="text" name="q" placeholder="Search..."
			<?php
				$keyword = $_POST["q"];
				if ($keyword != "")
					echo 'value="' . $keyword . '"';
			?>
		/>
	</form>
		<div class="grid">
			<?php
				session_start();
				$keyword = $_POST["q"];
				require_once "openDB.php";
				$query = "SELECT pID, topic, content, address FROM posts";
			    if ($keyword) {
			        $query .= " WHERE topic LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword .
								"%' OR address LIKE '%" . $keyword . "%'";
				}
			    $result = mysqli_query($link, $query);

			    for ($i=0; $i<mysqli_num_rows($result); $i++) {
			        $row = mysqli_fetch_assoc($result);
			        echo '<div class="grid-item"><img src="download_pic.php?pID=' . $row["pID"] . '" style="width:100%"/>';
					echo '<p><span style="font-weight:bold;font-size:1.2em;">' . $row["topic"] . '</span><br/><p>' . $row["content"] . '<br/><br>' . $row["address"] . '<br/></p></p></div>';
			    }
			?>
			<div class="grid-item">
				<img src="./img/food1.jpeg" style="width:100%"/>
				<p>
					<p><span style="font-weight:bold;font-size:1.2em;">蔬菜大全</span></p><br/>
					<p>均衡飲食，不來可惜<br/><br/>
					揚哲家<br/></p>
				</p>
			</div>
			<div class="grid-item">
				<img src="./img/food2.jpeg" style="width:100%"/>
				<p>
					<p><span style="font-weight:bold;font-size:1.2em;">五穀根莖</span></p><br/>
					<p>超營養，保證不會後悔<br/><br/>
					微米家<br/></p>
				</p>
			</div>
		    <div class="grid-item">
				<img src="./img/food3.jpeg" style="width:100%"/>
				<p>
					<p><span style="font-weight:bold;font-size:1.2em;">垃圾食物</span></p><br/>
					<p>看就知道多好吃，怎麼可能不值得<br/><br/>
					哈哈家<br/></p>
				</p>
			</div>
		</div>
	</body>
</html>
