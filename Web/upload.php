<?php
    $uploadFile = file_get_contents($_FILES["pic"]["tmp_name"]);
    $url = "https://hackathon.promise.com.tw/fileop/v1/files/upload/test.jpg";
    $options = array(
    	'http' => array(
	    	'header'  => "X-Auth-Token: ebceae03a92f4a3babb9c9ba9432cb4d\r\n" .
                         "User-Agent:I am Jordan\r\n" .
                         "X-Meta-FC-Compress: false\r\n" .
                         "X-Meta-FC-Encrypt: false\r\n" .
                         "X-Meta-FC-Mtime:\r\n" ,
			'method'  => 'POST',
			'content' => "{$uploadFile}"
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
?>
