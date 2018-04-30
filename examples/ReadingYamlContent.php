<?php

require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("hello: world");
var_dump($value);
