<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxLexiconEntries
 *
 * @ORM\Table(name="modx_lexicon_entries", indexes={@ORM\Index(name="topic", columns={"topic"}), @ORM\Index(name="language", columns={"language"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="namespace", columns={"namespace"})})
 * @ORM\Entity
 */
class ModxLexiconEntries
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
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=191, nullable=false, options={"default"="default"})
     */
    private $topic = 'default';

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=40, nullable=false, options={"default"="core"})
     */
    private $namespace = 'core';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=20, nullable=false, options={"default"="en"})
     */
    private $language = 'en';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="createdon", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="editedon", type="datetime", nullable=true)
     */
    private $editedon;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): self
    {
        $this->topic = $topic;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCreatedon(): ?\DateTimeInterface
    {
        return $this->createdon;
    }

    public function setCreatedon(?\DateTimeInterface $createdon): self
    {
        $this->createdon = $createdon;

        return $this;
    }

    public function getEditedon(): ?\DateTimeInterface
    {
        return $this->editedon;
    }

    public function setEditedon(?\DateTimeInterface $editedon): self
    {
        $this->editedon = $editedon;

        return $this;
    }


}
