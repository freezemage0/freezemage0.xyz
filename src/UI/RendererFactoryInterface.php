<?php


namespace Freezemage\Blog\UI;


interface RendererFactoryInterface
{
    public function create(string $root, array $paths): RendererInterface;
}