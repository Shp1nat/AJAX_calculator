<?php

$firstOperand = $_POST["firstOperand"];
$operation = $_POST["operation"];
$secondOperand = $_POST["secondOperand"];

$result = 0;

switch ($operation) {
    case "+":
        $result = $firstOperand + $secondOperand;
        break;
    case "-":
        $result = $firstOperand - $secondOperand;
        break;
    case "*":
        $result = $firstOperand * $secondOperand;
        break;
    case "/":
        if ($secondOperand != 0) {
            $result = $firstOperand / $secondOperand;
        } else {
            $result = "Деление на ноль невозможно";
        }
        break;
    case "a^b":
        $result = $firstOperand ** $secondOperand;
        break;
    case "b√a":
        $result = pow($firstOperand, 1 / $secondOperand);
        break;
    case "sin":
        $result = sin($firstOperand) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . sin($secondOperand);
        break;
    case "cos":
        $result = cos($firstOperand) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . cos($secondOperand);
        break;
    case "tan":
        $result = tan($firstOperand) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . tan($secondOperand);
        break;
    case "ctan":
        $result = 1/tan($firstOperand) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . 1/tan($secondOperand);
        break;    
}

echo $result;

?>