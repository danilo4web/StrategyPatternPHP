<?php declare(strict_types=1);

namespace App;

class Page
{
    /**
     * @var string
     */
    private $text;

    /**
     * Page constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param string|null $format
     * @return string
     */
    public function render(string $format = null): string
    {
        if ('json' === $format) {
            return json_encode($this->text);
        } elseif ('xml' === $format) {
            $document = new \DOMDocument();
            $root = $document->createElement('page');
            $document->appendChild($root);

            $node = $document->createElement('text');
            $node->nodeValue = $this->text;
            $root->appendChild($node);

            return $document->saveXML();
        }

        return $this->text;
    }
}
