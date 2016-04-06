<?php
	$age = 23;
	$height = 177;
	$weight = 52;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF8"/>
	<title>profile</title>
</head>
<body>
<p>あなたの年齢は<?php echo $age; ?>です。</p>
<table border="2">
<tr bgcolor="#AAAAAA">
<th>身長</th>
<th>体重</th>
</tr>

<?php
	print "<tr><td>{$height}</td><td>{$weight}</td></tr>\n";
?>
</table>
</body>
</html>
