<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMediaSources
 *
 * @ORM\Table(name="modx_media_sources", indexes={@ORM\Index(name="class_key", columns={"class_key"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_stream", columns={"is_stream"})})
 * @ORM\Entity
 */
class ModxMediaSources
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
     * @ORM\Column(name="class_key", type="string", length=100, nullable=false, options={"default"="sources.modFileMediaSource"})
     */
    private $classKey = 'sources.modFileMediaSource';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=16777215, nullable=true)
     */
    private $properties;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_stream", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isStream = '1';

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

    public function getClassKey(): ?string
    {
        return $this->classKey;
    }

    public function setClassKey(string $classKey): self
    {
        $this->classKey = $classKey;

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

    public function getIsStream(): ?bool
    {
        return $this->isStream;
    }

    public function setIsStream(bool $isStream): self
    {
        $this->isStream = $isStream;

        return $this;
    }


}
