<?php
if (isset($_GET['operator'])){
	switch($_GET['operator']){
	case '-':
		$answer = $_GET['left'] - $_GET['right'];
		break;
	case '*':
		$answer = $_GET['left'] * $_GET['right'];
		break;
	case '+':
		$answer = $_GET['left'] + $_GET['right'];
		break;
	case '/':
		$answer = $_GET['left'] / $_GET['right'];
		break;
	}

// ...

$result = "{$left} {$operator} {$right} = {$answer}";

// 設定ファイルを読み込み.
//$settings = require __DIR__ . '/secret-settings.php';

// 計算結果をメールで送信.
mb_language('Japanese');
mb_internal_encoding('UTF-8');
//mb_send_mail($settings['email'], '計算結果', $result, 'From: ' . mb_encode_mimeheader('簡易電卓プログラム') . ' <no-reply@example.com>');

// mask e-mail address
mb_send_mail('****@gmail.com', '計算結果', $result, 'From: ' . mb_encode_mimeheader('簡易電卓プログラム') . ' <no-reply@example.com>');

} else {
	$result = '計算結果なし';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>calc</title>
</head>
<body>
<form action="calc_mail.php" method="GET">
	<input type="text" name="left" required autofocus/>
	<select name="operator">
    <option value="+" selected>+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input type="text" name="right" required/>
<input type="submit" value="計算する">
</form>
<p><?php echo $_GET['left'].$_GET['operator'].$_GET['right']."=".$answer; ?></p>
</body>
</html>
