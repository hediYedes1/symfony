<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

class ServiceController extends AbstractController
{
    //#=attribut
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
       /* return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);*/
        return new Response("bonjour les frerots");
    }
    #[Route('/service/{name}', name: 'app_service')]
    public function ShowService($name):Response
    {
    // return new Response("service" .$name);
    return $this->render('service/ShowService.html.twig', ['name' => $name]);


    }
    
}
