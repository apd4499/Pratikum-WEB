<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo count($lecturers);


$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo is_array($lecturers);

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
sort($persons);
print_r($persons);

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
ksort($persons);
print_r($persons);

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
asort($persons);
print_r($persons);


?>