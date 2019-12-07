<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxContentType
 *
 * @ORM\Table(name="modx_content_type", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class ModxContentType
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
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mime_type", type="text", length=255, nullable=true)
     */
    private $mimeType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_extensions", type="text", length=255, nullable=true)
     */
    private $fileExtensions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="headers", type="text", length=16777215, nullable=true)
     */
    private $headers;

    /**
     * @var bool
     *
     * @ORM\Column(name="binary", type="boolean", nullable=false)
     */
    private $binary = '0';

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

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getFileExtensions(): ?string
    {
        return $this->fileExtensions;
    }

    public function setFileExtensions(?string $fileExtensions): self
    {
        $this->fileExtensions = $fileExtensions;

        return $this;
    }

    public function getHeaders(): ?string
    {
        return $this->headers;
    }

    public function setHeaders(?string $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getBinary(): ?bool
    {
        return $this->binary;
    }

    public function setBinary(bool $binary): self
    {
        $this->binary = $binary;

        return $this;
    }


}
