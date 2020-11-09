<?php

namespace App\Renderer;

interface RendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string;
}
