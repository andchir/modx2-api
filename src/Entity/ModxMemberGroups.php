<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMemberGroups
 *
 * @ORM\Table(name="modx_member_groups", indexes={@ORM\Index(name="role", columns={"role"}), @ORM\Index(name="rank", columns={"rank"})})
 * @ORM\Entity
 */
class ModxMemberGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userGroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="member", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $member = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $role = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserGroup(): ?int
    {
        return $this->userGroup;
    }

    public function setUserGroup(int $userGroup): self
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    public function getMember(): ?int
    {
        return $this->member;
    }

    public function setMember(int $member): self
    {
        $this->member = $member;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }


}
