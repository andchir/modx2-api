<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxDocumentgroupNames
 *
 * @ORM\Table(name="modx_documentgroup_names", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class ModxDocumentgroupNames
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
    private $name = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="private_memgroup", type="boolean", nullable=false)
     */
    private $privateMemgroup = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="private_webgroup", type="boolean", nullable=false)
     */
    private $privateWebgroup = '0';

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

    public function getPrivateMemgroup(): ?bool
    {
        return $this->privateMemgroup;
    }

    public function setPrivateMemgroup(bool $privateMemgroup): self
    {
        $this->privateMemgroup = $privateMemgroup;

        return $this;
    }

    public function getPrivateWebgroup(): ?bool
    {
        return $this->privateWebgroup;
    }

    public function setPrivateWebgroup(bool $privateWebgroup): self
    {
        $this->privateWebgroup = $privateWebgroup;

        return $this;
    }


}
