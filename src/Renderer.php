<?php declare(strict_types=1);

namespace App;

use App\Renderer\DefaultRendererInterface;
use App\Renderer\JsonRenderer;
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
    private $renderers;

    /**
     * @var DefaultRendererInterface
     */
    private $renderer;

    /**
     * Page constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->renderers = [
            'xml' => new XmlRenderer(),
            'json' => new JsonRenderer(),
            'base64' => new Base64Renderer(),
            'default' => new DefaultRenderer()
        ];

        $this->text = $text;
    }

    /**
     * @param string $format
     * @return void
     */
    public function setFormat(string $format): void
    {
        if (!array_key_exists($format, $this->renderers)) {
            throw new \InvalidArgumentException(
                'Invalid format! Just accepted formats are ' . implode('/', array_keys($this->renderers))
            );
        }

        $this->renderer = $this->renderers[$format];
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->renderer->render($this->text);
    }
}
