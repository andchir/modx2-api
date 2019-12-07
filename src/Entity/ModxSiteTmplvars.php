<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSiteTmplvars
 *
 * @ORM\Table(name="modx_site_tmplvars", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="category", columns={"category"}), @ORM\Index(name="rank", columns={"rank"}), @ORM\Index(name="locked", columns={"locked"}), @ORM\Index(name="static", columns={"static"})})
 * @ORM\Entity
 */
class ModxSiteTmplvars
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=80, nullable=false)
     */
    private $caption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=191, nullable=false)
     */
    private $description = '';

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
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="elements", type="text", length=65535, nullable=true)
     */
    private $elements;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=20, nullable=false)
     */
    private $display = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_text", type="text", length=16777215, nullable=true)
     */
    private $defaultText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true)
     */
    private $properties;

    /**
     * @var string|null
     *
     * @ORM\Column(name="input_properties", type="text", length=65535, nullable=true)
     */
    private $inputProperties;

    /**
     * @var string|null
     *
     * @ORM\Column(name="output_properties", type="text", length=65535, nullable=true)
     */
    private $outputProperties;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

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

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    public function getElements(): ?string
    {
        return $this->elements;
    }

    public function setElements(?string $elements): self
    {
        $this->elements = $elements;

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

    public function getDisplay(): ?string
    {
        return $this->display;
    }

    public function setDisplay(string $display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getDefaultText(): ?string
    {
        return $this->defaultText;
    }

    public function setDefaultText(?string $defaultText): self
    {
        $this->defaultText = $defaultText;

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

    public function getInputProperties(): ?string
    {
        return $this->inputProperties;
    }

    public function setInputProperties(?string $inputProperties): self
    {
        $this->inputProperties = $inputProperties;

        return $this;
    }

    public function getOutputProperties(): ?string
    {
        return $this->outputProperties;
    }

    public function setOutputProperties(?string $outputProperties): self
    {
        $this->outputProperties = $outputProperties;

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
