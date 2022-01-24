<?php


namespace Freezemage\Blog\UI;


interface RendererInterface
{
    public function render(string $template, array $data): string;
}