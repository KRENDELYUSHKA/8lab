<?php
if(isset($_POST['numbers']))
{

	$mas = $mas(explode(' ', $_POST['value']),explode(' ', $_POST['value1']),explode(' ', $_POST['value2']));
	for($i = 0; $i < count($mas); $i++)
	{
		$sum += $mas[$i][$i];
	}
	echo "Сумма главных цифр диагонали: ".$sum."</br>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <form method="post">
        <p>Введите значения массива</p>
        <input name="value" type="text">
        <input name="value1" type="text">
        <input name="value2" type="text">
        <input type="submit" value="Отправить" name="numbers">
    </form>
</body>

</html>