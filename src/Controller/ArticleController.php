<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
/**
 * Description of ArticleController
 *
 * @author karol.gornisiewicz
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController {
    //put your code here
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Great! It's my first step with Symfony.");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf("Future page to show the article: $slug", $slug));
    }
}
