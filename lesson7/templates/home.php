<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Epic Blog</title>

    <style type="text/css">
        li {
            margin-bottom: 10px; 
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($posts AS $post): ?>
            <li>
                <?= $post['message'] ?> <br>
                <?= date('d.m.Y H:i', strtotime($post['date']))?> <br>
                <?= $post['user_name'] ?> <br>
                <a href="index.php?action=edit&id=<?= $post['id'] ?>">Редактировать</a>
                <a href="index.php?action=delete&id=<?= $post['id'] ?>">Удалить</a> 
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=add">Добавить сообщение</a>
</body>
</html>