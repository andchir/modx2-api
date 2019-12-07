<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxPropertySet
 *
 * @ORM\Table(name="modx_property_set", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="category", columns={"category"})})
 * @ORM\Entity
 */
class ModxPropertySet
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=191, nullable=false)
     */
    private $description = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true)
     */
    private $properties;

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

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getProperties(): ?string
    {
        return $this->properties;
    }

    public function setProperties(?string $properties): self
    {
        $this->properties = $properties;

        return $this;
    }


}
