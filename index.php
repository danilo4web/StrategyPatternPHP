<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Renderer;

/** @var App\Renderer $page */
$page = new Renderer($argv[2]);

$formatText = $page->render($argv[1]);

echo $formatText;
