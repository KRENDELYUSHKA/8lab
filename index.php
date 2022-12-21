<?php
if (isset($_POST['login'])) {
    $n11 = $_POST['input1'];
    $n22 = $_POST['input2'];
    $n33 =$_POST['input3'];
    $n44 =$_POST['input4'];
    $n55 = $_POST['input5'];
    $n66 = $_POST['input6'];
    $n77 = $_POST['input7'];
    $n88 = $_POST['input8'];
    $n99 = $_POST['input9'];
$number = [
    [$n11,$n22,$n33],
    [$n44,$n55,$n66],
    [$n77,$n77,$n99]
]; 

$sum = 0;
for ($i = 0; $i <= count($number); $i++) {
    $sum += $number[$i][$i];
}
echo $sum;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="input1"/>
        <input type="text" name="input2"/>
        <input type="text" name="input3"/><br>
        <input type="text" name="input4"/>
        <input type="text" name="input5"/>
        <input type="text" name="input6"/><br>
        <input type="text" name="input7"/>
        <input type="text" name="input8"/>
        <input type="text" name="input9"/>
        <button type="submit" name="login">Посчитать</button>
    </form>

</body>

</html>