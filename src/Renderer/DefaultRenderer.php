<?php declare(strict_types=1);

namespace App\Renderer;

class DefaultRenderer implements RendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string
    {
        return $data;
    }
}
