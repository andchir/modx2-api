<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxDashboardWidget
 *
 * @ORM\Table(name="modx_dashboard_widget", indexes={@ORM\Index(name="type", columns={"type"}), @ORM\Index(name="lexicon", columns={"lexicon"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="namespace", columns={"namespace"})})
 * @ORM\Entity
 */
class ModxDashboardWidget
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=191, nullable=false)
     */
    private $namespace = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lexicon", type="string", length=191, nullable=false, options={"default"="core:dashboards"})
     */
    private $lexicon = 'core:dashboards';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=191, nullable=false, options={"default"="half"})
     */
    private $size = 'half';

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

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

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }


}
