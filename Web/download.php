<?php
    require_once "openDB.php";
    $id = $_GET['pID'];
    if ($id)
        $query = "SELECT * FROM posts WHERE pID='{$id}'";
    else {
        $query = "SELECT * FROM posts";
    }
    $result = mysqli_query($link, $query);

    for ($i=0; $i<mysqli_num_rows($result); $i++) {
        $row = mysqli_fetch_assoc($result);
        echo $row["topic"] . $row["time"] . $row["address"] . $row["price"] . $row["quantity"] . $row["expire_time"];
    }

    /*
    $url = "https://hackathon.promise.com.tw/fileop/v1/files/" . $id;
    //$url = "https://hackathon.promise.com.tw/fileop/v1/files/test.jpg";
//    $http = new HttpRequest($url, HttpRequest::METH_GET);
//    $http->addHeaders(array('X-Auth-Token'=>'ebceae03a92f4a3babb9c9ba9432cb4d','User-Agent'=>'I am Jordan'));
//    $message = $http->send;
	$options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" . "User-Agent:I am Jordan\r\n",
			'method'  => 'GET',
//			'content' => http_build_query($data),
		),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	echo $result;
    */
?>
