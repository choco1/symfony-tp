<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     *
     */
    public function hello(): Response
    {
        $name = 'Symfony';

        return $this->render('welcome/hello.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(): Response
    {
        return $this->render('welcome/home.html.twig');
    }
}
