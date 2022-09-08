<?php

namespace App;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class homepage
{
    #[Route('/')]
    public function homepage()
    {
        return new Response("Welcome");
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug): Response
    {
        $title = u(str_replace("-", " ", $slug));
        return new Response("Genre: $title");
    }
}