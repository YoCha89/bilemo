<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken as BaseRefreshToken;
use ApiPlatform\Core\Annotation\ApiResource;


#[ORM\Entity]
#[ORM\Table("refresh_tokens")]
class RefreshToken extends BaseRefreshToken
{
}
