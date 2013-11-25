<?php
Front::no_layout();

$url = $_POST['url'];
$r = file_get_contents($url);
echo $r;


