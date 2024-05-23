<?php

namespace App\Controller; //this namespace might be changed

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function test(): Response
    {
        return new Response('Symfony Application Working!');
    }
}
