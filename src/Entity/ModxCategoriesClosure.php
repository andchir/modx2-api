<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxCategoriesClosure
 *
 * @ORM\Table(name="modx_categories_closure")
 * @ORM\Entity
 */
class ModxCategoriesClosure
{
    /**
     * @var int
     *
     * @ORM\Column(name="ancestor", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ancestor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="descendant", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $descendant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="depth", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $depth = '0';

    public function getAncestor(): ?int
    {
        return $this->ancestor;
    }

    public function getDescendant(): ?int
    {
        return $this->descendant;
    }

    public function getDepth(): ?int
    {
        return $this->depth;
    }

    public function setDepth(int $depth): self
    {
        $this->depth = $depth;

        return $this;
    }


}
