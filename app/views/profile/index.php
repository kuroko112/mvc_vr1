<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title?></title>
    </head>
    <body>
        <h1><?= $head?></h1>
        <ul>
            <?php foreach($user as $row):?>
                <li><?= $row?></li>
            <?php endforeach;?>
        </ul>
    </body>
</html>