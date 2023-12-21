<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="module" src="load.js"></script>
    <title>Calc</title>
</head>
<body>
<h1>Basic Calculator</h1>
<div class="calc_body">
    <div class="display">0</div>
    <?php
    for($i=0;$i<10;$i++) {
        echo <<<HTML
<button id="b{$i}">
$i
</button>
HTML;
    }
        echo <<<HTML
<button id="badd">
+
</button>
<button id="bsub">
-
</button>
<button id="bmul">
*
</button>
<button id="bdiv">
/
</button>
<button id="bdot">
.
</button>
<button id="bres">
=
</button>
HTML;

    ?>
    <div class="hourglass">
        <img src="hourglass.gif" style="width: 100%">
    </div>
</div>

<button id="reset">Reset</button>

</body>
<footer>
    by Mikhail, end of 2023
</footer>
</html>