<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="result.php" method="GET">
帳號:<input type="text" name="uid" required=""><br><br>
姓名:<input type="text" name="uname" required=""><br><br>
性別:<input type="radio" name="gender" value="男" checked="">男
	 <input type="radio" name="gender" value="女" >女<Br>
選擇興趣 <select name="interest[]" id="">
	<option value="PC">上網</option>
	<option value="BALL">運動</option>
	<option value="MUSIC">音樂</option>
</select><br>
<input type="submit">
</form>
	
</body>
</html>