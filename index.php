<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Renderer;

try {

    /** @var App\Renderer $page */
    $page = new Renderer($argv[2]);
    $page->setFormat($argv[1]);
    echo $page->render();

} catch(Exception $exception) {
    echo $exception->getMessage();
}

