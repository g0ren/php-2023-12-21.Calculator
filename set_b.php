<?php
require_once "Calculator.php";
//use Calculator;

session_start();

$calc = Calculator::getInstance();

$calc->b = floatval($_POST['b']);
$calc->a = $_SESSION['a'];
$calc->operator = $_SESSION['op'];

echo $calc->GetResult();
