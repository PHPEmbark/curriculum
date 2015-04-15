<?php

unlink('exists_test');

echo file_exists('exists_test');

file_put_contents('exists_test', 'foobar');

echo file_exists('exists_test');

?>
