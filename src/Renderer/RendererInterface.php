<?php

namespace App\Renderer;

interface RendererInterface
{
    /**
     * @param string $data
     * @return mixed
     */
    public function render(string $data): string;
}