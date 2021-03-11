# Team Name Generator

Generate funny team names using fakerphp/faker

## Installation

Add the TeamNameGenerator library to your `composer.json` file:

```
composer require lonniecoffman/faker-team-names
```

## Usage

To use this with [Faker](https://github.com/fzaninotto/Faker), you must add the `TeamNameGenerator\FakerProvider` to the Faker generator:

```php
<?php

$faker = Faker\Factory::create();
$faker->addProvider(new TeamNameGenerator\FakerProvider($faker));

// Generator
$faker->teamName;
```

## Example Names

Distressing Freaks\
Disobedient Skullcaps\
Supercilious Trainers\
Monstrous Technicians\
Communicative Daughters\
Persevering Asshats\
Mysterious Geese\
Perfectly Balanced Stalkers\
Startling Paramedics\
French Rose Wolfmen\
Tasteless Snipers\
Sophisticated Knights\
Unfriendly Bull-Headed Lovers\
Honeydew Hitmen
