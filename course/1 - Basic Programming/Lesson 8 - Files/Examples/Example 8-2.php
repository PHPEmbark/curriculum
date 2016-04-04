<?php

file_put_contents("file.txt", "foobar");

echo file_exists("file.txt");

unlink("file.txt");

echo file_exists("file.txt");
