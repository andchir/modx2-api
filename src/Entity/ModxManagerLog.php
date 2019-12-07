<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxManagerLog
 *
 * @ORM\Table(name="modx_manager_log", indexes={@ORM\Index(name="user_occurred", columns={"user", "occurred"})})
 * @ORM\Entity
 */
class ModxManagerLog
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
     * @ORM\Column(name="user", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $user = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="occurred", type="datetime", nullable=true)
     */
    private $occurred;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=100, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="classKey", type="string", length=100, nullable=false)
     */
    private $classkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=191, nullable=false)
     */
    private $item = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getOccurred(): ?\DateTimeInterface
    {
        return $this->occurred;
    }

    public function setOccurred(?\DateTimeInterface $occurred): self
    {
        $this->occurred = $occurred;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getClasskey(): ?string
    {
        return $this->classkey;
    }

    public function setClasskey(string $classkey): self
    {
        $this->classkey = $classkey;

        return $this;
    }

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(string $item): self
    {
        $this->item = $item;

        return $this;
    }


}
