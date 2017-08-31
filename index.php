<?php
  require_once(__DIR__ . '/data.php');
  $files = dir_files($images);
  //var_dump(dir_files($images)) or die();
?>


<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Фотогалерея</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
         .photo {
             padding: 10px;
         }
         .photo img {
            border: 2px solid blue;
            width: 100px;
         }
        </style>
    </head>
    <body>
    <h1>Фотогалерея</h1>
   
    <?php foreach ($files as $image) { ; 
        // var_dump($image);
    ?>
        <div class="photo">
            <a href="image.php?file=<?php echo $image; ?>">
            <img src="img/<?php echo $image; ?>">
            </a>
         </div>
    <?php } ?>
   
    
    </body>
</html>