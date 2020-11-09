<?php declare(strict_types=1);

namespace App\Renderer;

class JsonRenderer implements DefaultRendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string
    {
        return json_encode($data);
    }
}
