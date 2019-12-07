<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxActions
 *
 * @ORM\Table(name="modx_actions", indexes={@ORM\Index(name="controller", columns={"controller"}), @ORM\Index(name="namespace", columns={"namespace"})})
 * @ORM\Entity
 */
class ModxActions
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
     * @ORM\Column(name="namespace", type="string", length=100, nullable=false, options={"default"="core"})
     */
    private $namespace = 'core';

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=191, nullable=false)
     */
    private $controller;

    /**
     * @var bool
     *
     * @ORM\Column(name="haslayout", type="boolean", nullable=false, options={"default"="1"})
     */
    private $haslayout = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="lang_topics", type="text", length=65535, nullable=false)
     */
    private $langTopics;

    /**
     * @var string
     *
     * @ORM\Column(name="assets", type="text", length=65535, nullable=false)
     */
    private $assets;

    /**
     * @var string
     *
     * @ORM\Column(name="help_url", type="text", length=65535, nullable=false)
     */
    private $helpUrl;

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

    public function getController(): ?string
    {
        return $this->controller;
    }

    public function setController(string $controller): self
    {
        $this->controller = $controller;

        return $this;
    }

    public function getHaslayout(): ?bool
    {
        return $this->haslayout;
    }

    public function setHaslayout(bool $haslayout): self
    {
        $this->haslayout = $haslayout;

        return $this;
    }

    public function getLangTopics(): ?string
    {
        return $this->langTopics;
    }

    public function setLangTopics(string $langTopics): self
    {
        $this->langTopics = $langTopics;

        return $this;
    }

    public function getAssets(): ?string
    {
        return $this->assets;
    }

    public function setAssets(string $assets): self
    {
        $this->assets = $assets;

        return $this;
    }

    public function getHelpUrl(): ?string
    {
        return $this->helpUrl;
    }

    public function setHelpUrl(string $helpUrl): self
    {
        $this->helpUrl = $helpUrl;

        return $this;
    }


}
