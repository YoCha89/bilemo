<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClientUserController extends AbstractController
{   
    private $security;

    public function __construct(Security $security, private UserRepository $repo){
        $this->security = $security;
    }

    public function __invoke(User $data) {
        $clientId = $this->security->getUser();

        if($data->getUserClient() == $clientId){
          return $data;  
        }else{
            $data = [
                'status' => 403,
                'message' => 'The user you are trying to access is not on your users lis'
            ];

            return new JsonResponse($data);
        }

    }
}

