<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AddController extends AbstractController
{
    #[Route('/add', name: 'app_add')]
    public function index():Response{

        return new Response('<BR>Hello my pussy !</BR>');
        
    }
}
