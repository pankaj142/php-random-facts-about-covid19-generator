<?php

require_once './src/facts-generator.php';

$facts_class_obj = new \Facts\Covid19Facts();
echo $facts_class_obj->generate();
echo "\n";
