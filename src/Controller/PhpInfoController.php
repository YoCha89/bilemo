<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PhpInfoController extends AbstractController
{

    /**
     * @Route("/php", name="php")
     */
    public function phpInfo(Request $request): Response {
        
       return phpinfo();
    }
}
