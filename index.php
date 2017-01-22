<html>
	<head>
		<title>料理の検索</title>
	</head>

	<body>
<!-----料理名検索----->
		<form method="POST" enctype="multipart/form-data" action="image.php">
		<p>
			料理名：
			<input type="text" name="name" size="20" />
		</p>
		<p>
			画像URL：
			<input type="text" name="url" size="50" />
		</p>
		
		<input type="submit" value="実行" />
		</form>

	</body>
</html>
