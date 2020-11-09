<?php declare(strict_types=1);

namespace App\Renderer;

class Base64Renderer implements RendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string
    {
        return base64_encode($data);
    }
}
