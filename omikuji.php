<?php
switch (rand(0,9)){
	case 0:
	case 1:
	case 2:
		$result = '凶';
		break;
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
		$result = '吉';
		break;
	case 8:
	case 9:
		$result = '大吉';
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>test</title>
</head>
<body>
<?php
switch ($result){
	case '凶':
		echo 'ごめんなさい。あなたの今日の運勢は<b>'.$result.'</b>です。';
		break;
	case '吉':
		echo 'あなたの今日の運勢は<b>'.$result.'</b>です。';
		break;
	case '大吉':
		echo 'おめでとうございます！あなたの今日の運勢は<b>'.$result.'</b>です。';
		break;
}
?>
</body>
</html>
