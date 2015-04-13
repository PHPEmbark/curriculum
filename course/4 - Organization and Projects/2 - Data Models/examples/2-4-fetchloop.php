<?php
class User {}

$sql = 'SELECT * FROM user';

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(Db::FETCH_CLASS, 'User');

foreach($stmt as $user_object) {}
