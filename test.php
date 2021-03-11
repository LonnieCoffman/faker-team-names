<?php

require __DIR__ .'/vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new TeamNameGenerator\FakerProvider($faker));
for ($i = 0; $i < 20; $i ++) {
    $name = $faker->teamName;
    echo "\n", $name;
}
echo "\n";