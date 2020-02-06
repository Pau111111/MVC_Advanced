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
    echo "<p>Consult view</p>";

    require VIEWS . '/header.php';
    ?>
    <div id="main">
        <h1 class="center">Consult content</h1>

        <table width="100%" border="1">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Text</th>
            </thead>
            <tbody>
            <?php
            include_once(ENTITIES . '/Content.php');
            foreach($this->contents as $row){
                $content = new Content();
                $content = $row;
            ?>
            <tr>
                <td><?php echo $content->name; ?></td>
                <td><?php echo $content->email; ?></td>
                <td><?php echo $content->text; ?></td>
                <td><a href="#">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
        require VIEWS . '/footer.php';
    ?>
</body>
</html>