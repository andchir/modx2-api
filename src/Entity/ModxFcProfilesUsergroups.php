<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxFcProfilesUsergroups
 *
 * @ORM\Table(name="modx_fc_profiles_usergroups")
 * @ORM\Entity
 */
class ModxFcProfilesUsergroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="usergroup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usergroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $profile = '0';

    public function getUsergroup(): ?int
    {
        return $this->usergroup;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }


}
