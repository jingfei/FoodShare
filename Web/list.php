<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/masonry.pkgd.min.js"></script>
		<link rel="stylesheet" href="./css/search.css" type="text/css"/>
		<style>
		.grid{ margin:10px 180px; }
		.grid-item {
			width: 300px;
			border:1px solid gray;
			border-radius:20px;
			margin-bottom:30px;
			background: #ccf8ff;
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
		var H = $(this).height() + 150;
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
			<img style="width:100px;position:fixed;left:70px;bottom:150px;" src="./img/bread.png" /><br/><br/>
			<img style="width:100px;position:fixed;left:20px;bottom:50px;" src="./img/coffee.png" />
			<img style="width:100px;position:fixed;right:70px;top:100px;" src="./img/pizza.png" />
			<img style="width:100px;position:fixed;right:20px;top:200px;" src="./img/juice.png" />
		</div>
	<form class="search" method="post" action="list.php" style="padding:150px;height:10px">
		<input type="text" name="q" placeholder="Search..." />
	</form>
		<div class="grid">
			<?php
				$keyword = $_POST["q"];
				require_once "openDB.php";
				$query = "SELECT pID, topic, content, address FROM posts";
			    if ($keyword) {
			        $query .= " WHERE topic LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword .
								"%' OR address LIKE '%" . $keyword . "%'";
					echo $query;
				}
			    $result = mysqli_query($link, $query);

			    for ($i=0; $i<mysqli_num_rows($result); $i++) {
			        $row = mysqli_fetch_assoc($result);
			        echo '<div class="grid-item"><img src="download_pic.php?pID=' . $row["pID"] . '" style="width:100%"/>';
					echo '<p>' . $row["topic"] . '<br/>' . $row["content"] . '<br/>' . $row["address"] . '<br/></p></div>';
			    }
			?>
			<div class="grid-item">
				<img src="./img/food1.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
			<div class="grid-item">
				<img src="./img/food2.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
		    <div class="grid-item">
				<img src="./img/food3.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
			<div class="grid-item">
				<img src="./img/food1.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
			<div class="grid-item">
				<img src="./img/food2.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
		    <div class="grid-item">
				<img src="./img/food3.jpeg" style="width:100%"/>
				<p>
					Food1<br/>
					Good<br/>
					address<br/>
				</p>
			</div>
		</div>
	</body>
</html>
