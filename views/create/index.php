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
    echo "<p>Create view</p>";

    require VIEWS . '/header.php';
    ?>
    <div id="main">
        <h1 class="center">Create new content</h1>
    </div>
    <?php
        require VIEWS . '/footer.php';
    ?>
</body>
</html>