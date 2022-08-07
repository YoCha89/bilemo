<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Repository\UserRepository;

class ClientUsersController extends AbstractController
{   
    public function __construct(private Security $security, private UserRepository $repo){

    }

    public function __invoke(){
        $clientId = $this->securiy->getUser()->getId();
        $users = $this->repo->finbBy(array('userClient' => $clientId));

        return $users;
    }



}

