<?php
require_once 'logic.php';
addComment();
$guestList = showComments();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Задание 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<div id="wrapper">
    <h1>Список комментариев</h1>
    <?php if(count($guestList) > 0): ?>

        <div class="note">
            <?php foreach($guestList as $item): ?>
                <p>
                    <span class="date"><?=$item['date']?></span>
                    <span class="name"><?=$item['guest_name']?></span>

                </p>
                <p><?=$item['text']?></p>

            <?php endforeach;?>
        </div>

    <?php endif;?>
    <div id="form">
        <form action="index.php" method="POST">
            <p><input class="form-control" name="guest_name" placeholder="Ваше имя"></p>
            <p><textarea class="form-control" name="text" placeholder="Ваш комментарий"></textarea></p>
            <p><input type="submit" name="addCommentButton" class="btn btn-info btn-block" value="Добавить комментарий"></p>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
