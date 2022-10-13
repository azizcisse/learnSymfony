<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OneController extends AbstractController
{
    #[Route('/sayHello', name: 'say.hello')]
    public function sayHello(): Response
    {
        $rand = rand(0, 10);
        echo $rand;
        if ($rand == 3) {
            return $this->redirectToRoute('one');
        }
        //Chercher au niveau de la base de données les users
        return $this->render('one/hello.html.twig',[
            'firstname' => 'Aziz',
            'name' => 'Cissé'
        ]);
    }
}
