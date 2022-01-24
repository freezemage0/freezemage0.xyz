<?php


namespace Freezemage\Blog;


use Freezemage\Blog\UI\RendererInterface;
use Psr\Http\Message\ResponseInterface;


final class Controller
{
    private ResponseInterface $response;
    private RendererInterface $renderer;

    public function __construct(ResponseInterface $response, RendererInterface $renderer)
    {
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function greet(?string $name = null): ResponseInterface
    {
        $page = $this->renderer->render('@page/index.twig', ['name' => $name ?? 'World!']);
        $this->response->getBody()->write($page);

        return $this->response;
    }
}