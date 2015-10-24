<?php
    $id = $_GET['pic_id'];
    $file_path = $_GET['file_path'];    //for testing only
    $url = "https://hackathon.promise.com.tw/fileop/v1/files" . $file_path;
//    $http = new HttpRequest($url, HttpRequest::METH_GET);
//    $http->addHeaders(array('X-Auth-Token'=>'ebceae03a92f4a3babb9c9ba9432cb4d','User-Agent'=>'I am Jordan'));
//    $message = $http->send;
	$options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" . 					 "User-Agent:I am Jordan\r\n",
			'method'  => 'POST',
//			'content' => http_build_query($data),
		),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	var_dump($result);
?>
