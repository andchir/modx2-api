<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxCategories
 *
 * @ORM\Table(name="modx_categories", uniqueConstraints={@ORM\UniqueConstraint(name="category", columns={"parent", "category"})}, indexes={@ORM\Index(name="rank", columns={"rank"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class ModxCategories
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
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $parent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=45, nullable=false)
     */
    private $category = '';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(?int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

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
