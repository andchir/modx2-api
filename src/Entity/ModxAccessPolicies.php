<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxAccessPolicies
 *
 * @ORM\Table(name="modx_access_policies", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="class", columns={"class"}), @ORM\Index(name="template", columns={"template"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class ModxAccessPolicies
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
     * @ORM\Column(name="parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="template", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $template = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=191, nullable=false)
     */
    private $class = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="lexicon", type="string", length=191, nullable=false, options={"default"="permissions"})
     */
    private $lexicon = 'permissions';

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

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(int $template): self
    {
        $this->template = $template;

        return $this;
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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

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
