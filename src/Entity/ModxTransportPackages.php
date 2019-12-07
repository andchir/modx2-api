<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxTransportPackages
 *
 * @ORM\Table(name="modx_transport_packages", indexes={@ORM\Index(name="provider", columns={"provider"}), @ORM\Index(name="package_name", columns={"package_name"}), @ORM\Index(name="version_minor", columns={"version_minor"}), @ORM\Index(name="release", columns={"release"}), @ORM\Index(name="workspace", columns={"workspace"}), @ORM\Index(name="disabled", columns={"disabled"}), @ORM\Index(name="version_major", columns={"version_major"}), @ORM\Index(name="version_patch", columns={"version_patch"}), @ORM\Index(name="release_index", columns={"release_index"})})
 * @ORM\Entity
 */
class ModxTransportPackages
{
    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $signature;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="installed", type="datetime", nullable=true)
     */
    private $installed;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false, options={"default"="1"})
     */
    private $state = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="workspace", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $workspace = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="provider", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $provider = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="disabled", type="boolean", nullable=false)
     */
    private $disabled = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="text", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manifest", type="text", length=65535, nullable=true)
     */
    private $manifest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attributes", type="text", length=16777215, nullable=true)
     */
    private $attributes;

    /**
     * @var string
     *
     * @ORM\Column(name="package_name", type="string", length=191, nullable=false)
     */
    private $packageName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    /**
     * @var int
     *
     * @ORM\Column(name="version_major", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $versionMajor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="version_minor", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $versionMinor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="version_patch", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $versionPatch = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="release", type="string", length=100, nullable=false)
     */
    private $release = '';

    /**
     * @var int
     *
     * @ORM\Column(name="release_index", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $releaseIndex = '0';

    public function getSignature(): ?string
    {
        return $this->signature;
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

    public function getInstalled(): ?\DateTimeInterface
    {
        return $this->installed;
    }

    public function setInstalled(?\DateTimeInterface $installed): self
    {
        $this->installed = $installed;

        return $this;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getWorkspace(): ?int
    {
        return $this->workspace;
    }

    public function setWorkspace(int $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }

    public function getProvider(): ?int
    {
        return $this->provider;
    }

    public function setProvider(int $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getManifest(): ?string
    {
        return $this->manifest;
    }

    public function setManifest(?string $manifest): self
    {
        $this->manifest = $manifest;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    public function setPackageName(string $packageName): self
    {
        $this->packageName = $packageName;

        return $this;
    }

    public function getMetadata(): ?string
    {
        return $this->metadata;
    }

    public function setMetadata(?string $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getVersionMajor(): ?int
    {
        return $this->versionMajor;
    }

    public function setVersionMajor(int $versionMajor): self
    {
        $this->versionMajor = $versionMajor;

        return $this;
    }

    public function getVersionMinor(): ?int
    {
        return $this->versionMinor;
    }

    public function setVersionMinor(int $versionMinor): self
    {
        $this->versionMinor = $versionMinor;

        return $this;
    }

    public function getVersionPatch(): ?int
    {
        return $this->versionPatch;
    }

    public function setVersionPatch(int $versionPatch): self
    {
        $this->versionPatch = $versionPatch;

        return $this;
    }

    public function getRelease(): ?string
    {
        return $this->release;
    }

    public function setRelease(string $release): self
    {
        $this->release = $release;

        return $this;
    }

    public function getReleaseIndex(): ?int
    {
        return $this->releaseIndex;
    }

    public function setReleaseIndex(int $releaseIndex): self
    {
        $this->releaseIndex = $releaseIndex;

        return $this;
    }


}
