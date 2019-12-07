<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxClassMap
 *
 * @ORM\Table(name="modx_class_map", uniqueConstraints={@ORM\UniqueConstraint(name="class", columns={"class"})}, indexes={@ORM\Index(name="parent_class", columns={"parent_class"}), @ORM\Index(name="name_field", columns={"name_field"})})
 * @ORM\Entity
 */
class ModxClassMap
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
     * @ORM\Column(name="class", type="string", length=120, nullable=false)
     */
    private $class = '';

    /**
     * @var string
     *
     * @ORM\Column(name="parent_class", type="string", length=120, nullable=false)
     */
    private $parentClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name_field", type="string", length=191, nullable=false, options={"default"="name"})
     */
    private $nameField = 'name';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="text", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="lexicon", type="string", length=191, nullable=false, options={"default"="core:resource"})
     */
    private $lexicon = 'core:resource';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getParentClass(): ?string
    {
        return $this->parentClass;
    }

    public function setParentClass(string $parentClass): self
    {
        $this->parentClass = $parentClass;

        return $this;
    }

    public function getNameField(): ?string
    {
        return $this->nameField;
    }

    public function setNameField(string $nameField): self
    {
        $this->nameField = $nameField;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getLexicon(): ?string
    {
        return $this->lexicon;
    }

    public function setLexicon(string $lexicon): self
    {
        $this->lexicon = $lexicon;

        return $this;
    }


}
