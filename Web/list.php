<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me</title>
		<meta charset="UTF-8" />
		<script src="./js/jquery-1.11.3.min.js"></script>
		<script src="./js/masonry.pkgd.min.js"></script>
		<link rel="stylesheet" href="./css/search.css" type="text/css"/>
		<style>
		.grid{ margin:10px 150px; }
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
		var H = $(this).height() + 100;
		$(this).parent().css({"height": H});
	});
	$('.grid').masonry({
		columnWidth: 300,
		itemSelector: '.grid-item',
		gutter: 40
	});
});
		</script>
	</head>
	<body style="margin:0; background-image:url('./img/wood.jpg'); background-size:100% 100%;">
	<form class="search" method="post" action="index.html" style="padding:150px;height:10px">
		<input type="text" name="q" placeholder="Search..." />
	</form>
		<div class="grid">
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
