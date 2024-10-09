<?php
$data = ['name' => 'Gohan', 'age' => '28'];

ob_start();

extract($data);

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

var_dump($data, $content);
