<?php
require('Persons.php');

$user1 = new Person();
$user1->age = 22;
$user1->Name = "Test Testerson";

echo $user1->SayHello();
