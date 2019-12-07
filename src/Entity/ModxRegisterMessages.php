<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxRegisterMessages
 *
 * @ORM\Table(name="modx_register_messages", indexes={@ORM\Index(name="valid", columns={"valid"}), @ORM\Index(name="accesses", columns={"accesses"}), @ORM\Index(name="accessed", columns={"accessed"}), @ORM\Index(name="expires", columns={"expires"}), @ORM\Index(name="created", columns={"created"})})
 * @ORM\Entity
 */
class ModxRegisterMessages
{
    /**
     * @var int
     *
     * @ORM\Column(name="topic", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid", type="datetime", nullable=false)
     */
    private $valid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="accessed", type="datetime", nullable=true)
     */
    private $accessed;

    /**
     * @var int
     *
     * @ORM\Column(name="accesses", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $accesses = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="expires", type="integer", nullable=false)
     */
    private $expires = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=16777215, nullable=false)
     */
    private $payload;

    /**
     * @var bool
     *
     * @ORM\Column(name="kill", type="boolean", nullable=false)
     */
    private $kill = '0';

    public function getTopic(): ?int
    {
        return $this->topic;
    }

    public function getId(): ?string
    {
        return $this->id;
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

    public function getValid(): ?\DateTimeInterface
    {
        return $this->valid;
    }

    public function setValid(\DateTimeInterface $valid): self
    {
        $this->valid = $valid;

        return $this;
    }

    public function getAccessed(): ?\DateTimeInterface
    {
        return $this->accessed;
    }

    public function setAccessed(?\DateTimeInterface $accessed): self
    {
        $this->accessed = $accessed;

        return $this;
    }

    public function getAccesses(): ?int
    {
        return $this->accesses;
    }

    public function setAccesses(int $accesses): self
    {
        $this->accesses = $accesses;

        return $this;
    }

    public function getExpires(): ?int
    {
        return $this->expires;
    }

    public function setExpires(int $expires): self
    {
        $this->expires = $expires;

        return $this;
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }

    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function getKill(): ?bool
    {
        return $this->kill;
    }

    public function setKill(bool $kill): self
    {
        $this->kill = $kill;

        return $this;
    }


}
