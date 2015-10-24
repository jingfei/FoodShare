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
    $expire_time = $_POST["expTime"];
    $quantity = $_POST["quantity"];
    $uploadFile = file_get_contents($_FILES["pic"]["tmp_name"]);

    $add_sql = "INSERT INTO `FoodShare`.`posts` (`pID`, `uID`, `topic`, `eatPlace`, `address`, `price`, `expire_time`, `quantity`)
                VALUES ({$pID}, {$uID}, {$topic}, {$eatPlace}, {$price}, {$address}, {$price}, {$expire_time}, {$quantity});"
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
