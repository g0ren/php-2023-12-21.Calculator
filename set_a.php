<?php
session_start();

$_SESSION['a'] = floatval($_POST['a']);
$_SESSION['op'] = $_POST['op'];
