<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function index()
    {
        return $this->render('hello_world/index.html.twig', [
            'controller_name' => 'HelloWorldController',
        ]);
    }
}
