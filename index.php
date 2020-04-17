<!DOCTYPE html>
<html>
<head>
    <title>Awesome demo with Nicolas Cage</title>
    <style>
        body {
            width: 35em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>
<h1>Let's launch docker!</h1>
<img src="https://www.placecage.com/<?php echo $_GET['width'] ? $_GET['width'] : '400' ?>/400" />
<p>
    Workload: <?php echo $_ENV['HOSTNAME'] ?>
</p>
<p>
    Width: <?php echo $_GET['width'] ?>
</p>
</body>
</html>
