<?php


namespace Freezemage\Blog\UI\Twig;


use Freezemage\Blog\UI\RendererInterface;
use Twig\Environment;


final class Renderer implements RendererInterface
{
    private Environment $engine;

    public function __construct(Environment $engine)
    {
        $this->engine = $engine;
    }

    public function render(string $template, array $data): string
    {
        return $this->engine->render($template, $data);
    }
}