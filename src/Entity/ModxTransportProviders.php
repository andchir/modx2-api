<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxTransportProviders
 *
 * @ORM\Table(name="modx_transport_providers", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="api_key", columns={"api_key"}), @ORM\Index(name="active", columns={"active"}), @ORM\Index(name="username", columns={"username"}), @ORM\Index(name="priority", columns={"priority"})})
 * @ORM\Entity
 */
class ModxTransportProviders
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
     * @var string|null
     *
     * @ORM\Column(name="service_url", type="text", length=255, nullable=true)
     */
    private $serviceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=191, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="api_key", type="string", length=191, nullable=false)
     */
    private $apiKey = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="priority", type="boolean", nullable=false, options={"default"="10"})
     */
    private $priority = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="text", length=16777215, nullable=false)
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getServiceUrl(): ?string
    {
        return $this->serviceUrl;
    }

    public function setServiceUrl(?string $serviceUrl): self
    {
        $this->serviceUrl = $serviceUrl;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPriority(): ?bool
    {
        return $this->priority;
    }

    public function setPriority(bool $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getProperties(): ?string
    {
        return $this->properties;
    }

    public function setProperties(string $properties): self
    {
        $this->properties = $properties;

        return $this;
    }


}
