<?php
$link = @mysqli_connect('140.116.96.47','tainan','tainan','foodshare')
			or die("伺服器連線錯誤!");
mysqli_query($link, "SET NAMES utf8");
?>
