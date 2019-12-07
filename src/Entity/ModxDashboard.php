<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxDashboard
 *
 * @ORM\Table(name="modx_dashboard", indexes={@ORM\Index(name="hide_trees", columns={"hide_trees"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class ModxDashboard
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
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_trees", type="boolean", nullable=false)
     */
    private $hideTrees = '0';

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

    public function getHideTrees(): ?bool
    {
        return $this->hideTrees;
    }

    public function setHideTrees(bool $hideTrees): self
    {
        $this->hideTrees = $hideTrees;

        return $this;
    }


}
