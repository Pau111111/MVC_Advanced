<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    if(EXECUTION_FLOW)
    echo "<p>Main view</p>";

    require VIEWS . '/header.php';
    ?>
    <div id="main">
        <h1 class="center">Welcome to the dark side</h1>
    </div>
    <?php
        require VIEWS . '/footer.php';
    ?>

</body>
</html>