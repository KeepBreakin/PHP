<?php

require_once __DIR__.'/autoloader.php';

$person1 = new \Domain\Player('David', 'Mattei', '19-2-1989', 9);
$person2 = new \Domain\Trainer('Manuel', 'Colomo', '22-11-1989');

echo $person1->getFullName() . $person2->getFullName();


