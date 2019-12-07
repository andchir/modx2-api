<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSiteHtmlsnippets
 *
 * @ORM\Table(name="modx_site_htmlsnippets", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="category", columns={"category"}), @ORM\Index(name="static", columns={"static"}), @ORM\Index(name="locked", columns={"locked"})})
 * @ORM\Entity
 */
class ModxSiteHtmlsnippets
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
     * @ORM\Column(name="source", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $source = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="property_preprocess", type="boolean", nullable=false)
     */
    private $propertyPreprocess = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=191, nullable=false, options={"default"="Chunk"})
     */
    private $description = 'Chunk';

    /**
     * @var int
     *
     * @ORM\Column(name="editor_type", type="integer", nullable=false)
     */
    private $editorType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cache_type", type="boolean", nullable=false)
     */
    private $cacheType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="snippet", type="text", length=16777215, nullable=true)
     */
    private $snippet;

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true)
     */
    private $properties;

    /**
     * @var bool
     *
     * @ORM\Column(name="static", type="boolean", nullable=false)
     */
    private $static = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="static_file", type="string", length=191, nullable=false)
     */
    private $staticFile = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?int
    {
        return $this->source;
    }

    public function setSource(int $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getPropertyPreprocess(): ?bool
    {
        return $this->propertyPreprocess;
    }

    public function setPropertyPreprocess(bool $propertyPreprocess): self
    {
        $this->propertyPreprocess = $propertyPreprocess;

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

    public function getEditorType(): ?int
    {
        return $this->editorType;
    }

    public function setEditorType(int $editorType): self
    {
        $this->editorType = $editorType;

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

    public function getCacheType(): ?bool
    {
        return $this->cacheType;
    }

    public function setCacheType(bool $cacheType): self
    {
        $this->cacheType = $cacheType;

        return $this;
    }

    public function getSnippet(): ?string
    {
        return $this->snippet;
    }

    public function setSnippet(?string $snippet): self
    {
        $this->snippet = $snippet;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): self
    {
        $this->locked = $locked;

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

    public function getStatic(): ?bool
    {
        return $this->static;
    }

    public function setStatic(bool $static): self
    {
        $this->static = $static;

        return $this;
    }

    public function getStaticFile(): ?string
    {
        return $this->staticFile;
    }

    public function setStaticFile(string $staticFile): self
    {
        $this->staticFile = $staticFile;

        return $this;
    }


}
