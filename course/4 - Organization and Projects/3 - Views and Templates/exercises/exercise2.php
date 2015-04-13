<?php
include __DIR__ . '/Template2.php';

$template = new Template(__DIR__);

$string = '<bold>To boldly go!</bold>';

$template->render('escape.html', ['message' => $string,
                                  'escaped' => $string]);