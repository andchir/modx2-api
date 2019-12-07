<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMembergroupNames
 *
 * @ORM\Table(name="modx_membergroup_names", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="dashboard", columns={"dashboard"}), @ORM\Index(name="rank", columns={"rank"})})
 * @ORM\Entity
 */
class ModxMembergroupNames
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
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dashboard", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $dashboard = '1';

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

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

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

    public function getDashboard(): ?int
    {
        return $this->dashboard;
    }

    public function setDashboard(int $dashboard): self
    {
        $this->dashboard = $dashboard;

        return $this;
    }


}
