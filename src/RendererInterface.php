<?php declare(strict_types=1);

namespace App;

use App\Renderer\DefaultRendererInterface;

interface RendererInterface
{
    /**
     * @param string $format
     * @return void
     */
    public function setFormat(string $format): void;

    /**
     * @return string
     */
    public function render(): string;
}
