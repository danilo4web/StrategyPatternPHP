<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Page;

$page = new Page('meu nome aqui');

$formatText = $page->render($argv[1]);

echo $formatText;
