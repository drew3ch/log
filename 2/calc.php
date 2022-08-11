<?php
if (isset($_POST['operation'])) {
    function sum($a, $b) {
		return $a + $b;
	}
	function subtract($a, $b) {
		return $a - $b;
	}
	function multiply($a, $b) {
		return $a * $b;
	}
	function divide($a, $b) {
		if ($b == 0) return "На ноль делить нельзя";
		return $a / $b;
	}
	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case "+":
				return sum($arg1, $arg2);
			case "-":
				return subtract($arg1, $arg2);
			case "*":
				return multiply($arg1, $arg2);
			case "/":
				return divide($arg1, $arg2);
			default:
				return false;
		}
	}
    $result = implode(" ", array($_POST['a'], $_POST['operation'], $_POST['b']))." = ".mathOperation($_POST['a'], $_POST['b'], $_POST['operation']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>calc</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a">
        <select name="operation">
            <option value="+">плюс</option>
            <option value="-">минус</option>
            <option value="*">умножить</option>
            <option value="/">разделить</option>
        </select>
        <input type="text" name="b">
        <input type="submit" value="Результат">
    </form>
    <p><?php
	if (isset($_POST['operation'])) {
		if (!empty($result)) {
			echo $result;
		}
	}
	?></p>
</body>
</html>