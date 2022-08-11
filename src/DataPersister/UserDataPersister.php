<?php

namespace App\DataPersister;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;

//Custom persister to juggle with plainpassword and password in order to hide the uncrypted pass 
class UserDataPersister implements ContextAwareDataPersisterInterface
{
    private $em;
    private $passEncoder;
    private $security;

    public function __construct(EntityManagerInterface $em, UserPasswordEncoderInterface $passEncoder, Security $security) {
        $this->em = $em;
        $this->passEncoder = $passEncoder;
        $this->security = $security;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof User;
    }

    public function persist($data, array $context = []){

        $client = $this->security->getUser();

        if ($data->getPlainPassword()) {
            $data->setPassword(
                $this->passEncoder->encodePassword(
                    $data,
                    $data->getPlainPassword()
                )
            );

            $data->eraseCredentials();
        }

        if ($data == 'string' || $data == null){
            $data->setRoles('ROLE_USER');
        }

        $data->setUserClient($client);

        $this->em->persist($data);
        $this->em->flush();
    }

    public function remove($data, array $context = [])
    {
        $client = $this->security->getUser();

        if($data->getUserClient() == $client){
            $this->em->remove($data);
            $this->em->flush();
        }else{
            $data = [
                'status' => 401, // Le status n'existe pas car ce n'est pas une exception HTTP, donc on met 500 par défaut.
                'message' => 'We have not find the user you are trying to delete in your registered users. You can only delete accounts from your user\'s list.'
            ];

            return new JsonResponse($data);
        }

    }
}