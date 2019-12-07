<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxNamespaces
 *
 * @ORM\Table(name="modx_namespaces")
 * @ORM\Entity
 */
class ModxNamespaces
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="text", length=65535, nullable=true)
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assets_path", type="text", length=65535, nullable=true)
     */
    private $assetsPath;

    public function getName(): ?string
    {
        return $this->name;
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

    public function getAssetsPath(): ?string
    {
        return $this->assetsPath;
    }

    public function setAssetsPath(?string $assetsPath): self
    {
        $this->assetsPath = $assetsPath;

        return $this;
    }


}
