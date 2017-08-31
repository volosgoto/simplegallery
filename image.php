<?php
    $file = $_GET['file'];
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <img src="img/<?php echo $file; ?>"> <br>  
        <?php
            echo 'Имя файла: ' . $file = $_GET['file'];
        ?>
    </body>
</html>

