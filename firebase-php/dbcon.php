<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('project-67e8e-firebase-adminsdk-lqw22-97ae69cbd0.json')
    ->withDatabaseUri('https://project-67e8e-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
?>