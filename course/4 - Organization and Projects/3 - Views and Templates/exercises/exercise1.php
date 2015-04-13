<!doctype html>
<html>
    <head>
        <title>Bad Dump</title>
    </head>
    <body>
<?php
include __DIR__ . '/Template.php';

$template = new Template(__DIR__);

$template->render('bad.html');

$template->render('basic.html', ['message' => 'hello']);
$template->render('basic.html', ['message' => 'world']);
?>
    </body>
</html>