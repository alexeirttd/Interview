<?php
require_once 'database.php';

function addComment() {
    $date = date('Y-m-d H:i:s');

    if (key_exists('addCommentButton', $_POST))
    {
        if (!empty($_POST['guest_name']) && !empty($_POST['text'])) {
            $review['guest_name'] = htmlspecialchars($_POST['guest_name']);
            $review['text'] = htmlspecialchars($_POST['text']);
            $review['date'] = $date;
            $sql = "INSERT INTO comments (`guest_name`, `text`, `date`) VALUES (:guest_name, :text, :date)";
            $pdo = DB_Connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($review);

            header("Location: index.php");
        }
        else
        {
            echo "Ошибка! Все поля должны быть заполнены!";
        }
    }
}
function showComments() {
    $pdo = DB_Connect();
    $sql = "SELECT guest_name, text, date FROM comments";
    $connect = $pdo->prepare($sql);
    $connect->execute();
    return $connect->fetchAll(PDO::FETCH_ASSOC);
}

?>