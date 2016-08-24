<head>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
    <script src="JS/app.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
include_once "connect.php";
include "show_coment.php";
?>

<div class="main">
    <div class="main--content">
        <?php
        show_all_coments()
        ?>
        <hr>
        <form name="comment" method="post" action="add_comment.php">
            <div id="statusbox">Комментарий должен быть по теме и составлен корректно!</div>
            <h3>Name</h3>
            <input id="username" type="text" name="name"  maxlength="60" />
            <h3>messenge</h3>
            <textarea id="text" name="text" ></textarea>
            <input type="button" value="Отправить" id="add_comments_button" onclick=""/>
        </form>
    </div>
</div>
