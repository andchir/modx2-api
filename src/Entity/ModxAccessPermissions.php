<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxAccessPermissions
 *
 * @ORM\Table(name="modx_access_permissions", indexes={@ORM\Index(name="template", columns={"template"}), @ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class ModxAccessPermissions
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
     * @ORM\Column(name="template", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $template = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="value", type="boolean", nullable=false, options={"default"="1"})
     */
    private $value = '1';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(int $template): self
    {
        $this->template = $template;

        return $this;
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValue(): ?bool
    {
        return $this->value;
    }

    public function setValue(bool $value): self
    {
        $this->value = $value;

        return $this;
    }


}
