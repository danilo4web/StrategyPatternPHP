<?php declare(strict_types=1);

namespace App\Renderer;

class XmlRenderer implements RendererInterface
{
    /**
     * @param string $data
     * @return string
     */
    public function render(string $data): string
    {
        $document = new \DOMDocument();
        $root = $document->createElement('page');
        $document->appendChild($root);

        $node = $document->createElement('text');
        $node->nodeValue = $data;
        $root->appendChild($node);

        return $document->saveXML();
    }
}
