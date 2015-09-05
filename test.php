<?php

$link = mysql_connect('localhost', 'root', 'p455w0rd');

if (!$link) {

die('Could not connect: ' . mysql_error());

}

echo 'Connected successfully';

mysql_close($link);

?>
