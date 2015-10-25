<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me - list</title>
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
		<h1 style="margin:50px;color:white;">已分享您的美食，請靜候佳音</h1>
	</body>
</html>
<?php
    // I want to get last pID first
    require_once "openDB.php";
    $ask_query = "SELECT pID FROM posts ORDER BY pID DESC LIMIT 1";
    $result = mysqli_query($link,$ask_query);
    $get = mysqli_fetch_assoc($result);
    $pID = $get["pID"] + 1;
    $uID = $_POST["uID"];
    $topic = $_POST["topic"];
    $content = $_POST["content"];
    $eatPlace = $_POST["eatPlace"];
    $address = $_POST["address"];
    $price = $_POST["price"];
    $expire_time = $_POST["expire_time"];
    $quantity = $_POST["quantity"];
    $uploadFile = file_get_contents($_FILES["pic"]["tmp_name"]);
    $add_sql = "INSERT INTO `foodshare`.`posts` (`pID`, `topic`, `content`, `eatPlace`, `address`, `price`, `expire_time`, `quantity`)
                VALUES ('{$pID}', '{$topic}', '{$content}', '{$eatPlace}', '{$address}', '{$price}', '{$expire_time}', '{$quantity}');";
  //  echo $add_sql;
    mysqli_query($link, $add_sql);

    //mkdir for the post first
    $mkdir_url = "https://hackathon.promise.com.tw/fileop/v1/fileops/Posts/{$pID}";
    $options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" .
                         "User-Agent:I am Jordan\r\n",
			'method'  => 'POST'
		)
	);
    $mkdir_context = stream_context_create($options);
    $result = file_get_contents($mkdir_url, false, $mkdir_context);


    //here to put content into txt
    var_dump($uploadFile);
    $content_url = "https://hackathon.promise.com.tw/fileop/v1/files/Posts/{$pID}/content.txt";
    $options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" .
                         "User-Agent:I am Jordan\r\n" .
                         "X-Meta-FC-Compress: false\r\n" .
                         "X-Meta-FC-Encrypt: false\r\n" .
                         "X-Meta-FC-Mtime:",
			'method'  => 'POST',
            'content' => "{$content}"
		)
	);
	$content_context  = stream_context_create($options);
	$result = file_get_contents($content_url, false, $content_context);

    $pic_url = "https://hackathon.promise.com.tw/fileop/v1/files/Posts/{$pID}/pic.jpg";
    $options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" .
                         "User-Agent:I am Jordan\r\n" .
                         "X-Meta-FC-Compress: false\r\n" .
                         "X-Meta-FC-Encrypt: false\r\n" .
                         "X-Meta-FC-Mtime:",
			'method'  => 'POST',
            'content' => "{$uploadFile}"
		)
	);
	$pic_context  = stream_context_create($options);
	$result = file_get_contents($pic_url, false, $pic_context);
?>