<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/login/send", name="login_send")
     */
    public function send(Request $request)
    {
        $username = $request->request->get('_username');
        $password = $request->request->get('_password');

        if ($username == 'natalia' && $password == '1234') {
            return $this->redirectToRoute('homepage');
        }    
    }

    /**
     * @Route("/login/homepage", name="homepage")
     */
    public function homepage()
    {
        return $this->render('login/homepage.html.twig', [
            'username' => 'Natália',
        ]);
    }
}
