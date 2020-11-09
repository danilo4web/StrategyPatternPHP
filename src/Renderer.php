<?php declare(strict_types=1);

namespace App;

use App\Renderer\JsonRenderer;
use App\Renderer\RendererInterface;
use App\Renderer\XmlRenderer;
use App\Renderer\Base64Renderer;
use App\Renderer\DefaultRenderer;

class Renderer implements RendererInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $renderer;

    /**
     * Page constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->renderer = [
            'xml' => new XmlRenderer(),
            'json' => new JsonRenderer(),
            'base64' => new Base64Renderer(),
            'default' => new DefaultRenderer()
        ];

        $this->text = $text;
    }

    /**
     * @param string|null $format
     * @return string
     */
    public function render(string $format = null): string
    {
        return $this->renderer[$format]->render($this->text);
    }
}
