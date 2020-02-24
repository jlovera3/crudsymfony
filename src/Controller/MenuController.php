<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function mainMenu()
    {
        $comments=[
            'Comentario de prueba1',
            'Comentario de prubaaaa 2',
            'Demasiados comentarios por hoy'
        ];

        return $this->render('menu/show.html.twig', [
            'comments'=>$comments,
        ]);

    }

}
