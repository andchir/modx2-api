<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxContextResource
 *
 * @ORM\Table(name="modx_context_resource")
 * @ORM\Entity
 */
class ModxContextResource
{
    /**
     * @var string
     *
     * @ORM\Column(name="context_key", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contextKey;

    /**
     * @var int
     *
     * @ORM\Column(name="resource", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $resource;

    public function getContextKey(): ?string
    {
        return $this->contextKey;
    }

    public function getResource(): ?int
    {
        return $this->resource;
    }


}
