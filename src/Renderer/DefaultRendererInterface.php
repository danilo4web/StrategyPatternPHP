<?php

namespace App\Renderer;

interface DefaultRendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string;
}
