<?php


namespace Freezemage\Blog\UI\Twig;


use Freezemage\Blog\UI\RendererFactoryInterface;
use Freezemage\Blog\UI\RendererInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


final class RendererFactory implements RendererFactoryInterface
{
    public function create(string $root, array $paths): RendererInterface
    {
        $loader = new FilesystemLoader([], $root);

        foreach ($paths as $namespace => $path) {
            $namespace = is_numeric($namespace) ? FilesystemLoader::MAIN_NAMESPACE : $namespace;
            $loader->addPath($path, $namespace);
        }
        $engine = new Environment($loader);
        return new Renderer($engine);
    }
}