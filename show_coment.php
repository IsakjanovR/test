<?php
function show_all_coments()
{
    global $db_connect;
    $newsQuery = mysqli_query($db_connect, "SELECT * FROM `comments` ORDER BY `date` DESC LIMIT 5");
    $newsArray = mysqli_fetch_assoc($newsQuery);
    if ($newsArray['id']) {
        do {
            echo "<hr><div class='comment-on'>
                    <div class='comment_" . $newsArray['id'] . "'>
                   <div class='aythor'> <p>Автор:</p>
                   <div class='comment__author'>" . $newsArray['username'] . "</div></div>";
            echo "<div class='messenge'>";
            echo "<p>Сообщение:</p><div class='comment__text'>" . $newsArray['text'] . "</div></div>";
            echo "<div class='date'><p>Дата публикации:</p><div class='comment_date'>" . $newsArray['date'] . "</div></div>";
            echo "<a href='#'><input type='button' id='del-" . $newsArray['id'] . "' class='del_button' value='delete'/></a></div></div>";
        } while ($newsArray = mysqli_fetch_array($newsQuery));
    } else {
        echo 'В базе еще нету ни одного коментария';
    }
}