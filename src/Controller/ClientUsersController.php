<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Repository\UserRepository;

class ClientUsersController extends AbstractController
{   
    private $security;

    public function __construct(Security $security, private UserRepository $repo){
        $this->security = $security;
    }

    public function __invoke(){
        $clientId = $this->security->getUser()->getId();
        $users = $this->repo->findBy(array('userClient' => $clientId));

        return $users;
    }



}

