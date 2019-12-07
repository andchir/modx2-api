<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxExtensionPackages
 *
 * @ORM\Table(name="modx_extension_packages", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="namespace", columns={"namespace"})})
 * @ORM\Entity
 */
class ModxExtensionPackages
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
     * @ORM\Column(name="namespace", type="string", length=40, nullable=false, options={"default"="core"})
     */
    private $namespace = 'core';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"="core"})
     */
    private $name = 'core';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="text", length=65535, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="table_prefix", type="string", length=191, nullable=false)
     */
    private $tablePrefix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="service_class", type="string", length=191, nullable=false)
     */
    private $serviceClass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="service_name", type="string", length=191, nullable=false)
     */
    private $serviceName = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getTablePrefix(): ?string
    {
        return $this->tablePrefix;
    }

    public function setTablePrefix(string $tablePrefix): self
    {
        $this->tablePrefix = $tablePrefix;

        return $this;
    }

    public function getServiceClass(): ?string
    {
        return $this->serviceClass;
    }

    public function setServiceClass(string $serviceClass): self
    {
        $this->serviceClass = $serviceClass;

        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
