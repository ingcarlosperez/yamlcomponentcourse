<?php

require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$value = Yaml::parseFile("examples/people.yaml");
var_dump($value);
