<?php

    require __DIR__ . '/db/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <div class="container">
        <header>

        </header>

        <div class="disc-shop">
            <?php foreach($dischi as $disco){ ?>
                <div class="disc-element">
                    <img src="<?php echo $disco['poster']; ?>" alt="">
                    <h3><?php echo $disco['title']; ?></h3>
                    <p><?php echo $disco['author']; ?></p>
                    <p><?php echo $disco['year']; ?></p>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>