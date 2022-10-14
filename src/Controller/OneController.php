<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OneController extends AbstractController
{
    #[Route('/one/aziz', name: 'app_one')]
    public function index(): Response
    {
        //Chercher au niveau de la base de données les users
        return $this->render('one/index.html.twig',[
            'firstname' => 'Aziz',
            'name' => 'Cissé'
        ]);
    }

    #[Route('/sayHello/{firstname}/{name}', name: 'say.hello')]
    public function sayHello(Request $request, $firstname, $name): Response
    {
        dd($request);
        return $this->render('one/hello.html.twig', [
            'prenom' => $firstname,
            'nom' => $name,           
        ]);
    }
}
