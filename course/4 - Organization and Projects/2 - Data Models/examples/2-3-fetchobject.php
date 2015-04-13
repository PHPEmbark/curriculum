<?php
class User {}

$sql = 'SELECT * FROM user';

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->fetchObject('User');