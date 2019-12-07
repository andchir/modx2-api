<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxUserGroupRoles
 *
 * @ORM\Table(name="modx_user_group_roles", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="authority", columns={"authority"})})
 * @ORM\Entity
 */
class ModxUserGroupRoles
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="authority", type="integer", nullable=false, options={"default"="9999","unsigned"=true})
     */
    private $authority = '9999';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthority(): ?int
    {
        return $this->authority;
    }

    public function setAuthority(int $authority): self
    {
        $this->authority = $authority;

        return $this;
    }


}
