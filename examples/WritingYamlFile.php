<?php

require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$people = array("persona1" => array(
    "nombre" => "Carlos",
    "sexo" => "Masculino",
    "profesión" => "Ingeniero de Sistemas y Computación",
    "documento" => (string) 4321,
),
    "persona2" => array(
        "nombre" => "Bibiana",
        "sexo" => "Femenino",
        "profesión" => "Contadora Publica",
        "documento" => 1234,
    ),
);

$yamlcontent = Yaml::dump($people);

file_put_contents('examples/people.yaml', $yamlcontent);
