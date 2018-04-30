<?php

require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

try {
    $value = Yaml::parse("hello : world\n \rhello1:world1");
    var_dump($value);
} catch (ParseException $exception) {
    printf('Unable to parse the YAML string: %s', $exception->getMessage());
}
