<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
	<?php
	$ConChecking = @mysql_connect("localhost", "root", "123456789") or die("連結失敗");
	$DB_mysql_select = @mysql_select_db("clysspr777_database")or die("無此資料庫");
	
	$DB_Insert = "insert into user_suggest(name, email, suggestion, number) value('user_Name', 'user_Email', 'user_Suggestion', '')";
		
	mysql_query($DB_Insert);
	mysql_close($ConChecking);
	/*
	if($ConChecking){
		echo "連結成功";
	} else {
		echo "連結失敗";
	}
	*/
	?>
</body>
</html>