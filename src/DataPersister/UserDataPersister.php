<?php

namespace App\DataPersister;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

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

        $clientId = $this->securiy->getUser()->getId();

        if ($data->getPlainPassword()) {
            $data->setPassword(
                $this->passEncoder->encodePassword(
                    $data,
                    $data->getPlainPassword()
                )
            );

            $data->eraseCredentials();
        }

        $data->setUserClient($clientId);

        $this->em->persist($data);
        $this->em->flush();
    }

    public function remove($data, array $context = [])
    {
        $clientId = $this->securiy->getUser()->getId();

        if($data->getUserClient() == $clientId){
            $this->em->remove($data);
            $this->em->flush();
        }

    }
}