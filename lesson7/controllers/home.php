<?php

$db = connection($db_config);

$stmt = $db->prepare('SELECT `m`.*,`u`.`name` AS `user_name` FROM `messages` AS `m` LEFT JOIN  `users` AS `u` ON `u`.`id`=`m`.`user_id` ORDER BY `m`.`date` DESC LIMIT 8');
$stmt->execute();
$data = $stmt->fetchAll();

echo template('templates/home.php', [
    'posts' => $data
]);
