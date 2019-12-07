<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSession
 *
 * @ORM\Table(name="modx_session", indexes={@ORM\Index(name="access", columns={"access"})})
 * @ORM\Entity
 */
class ModxSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var int
     *
     * @ORM\Column(name="access", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $access;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=16777215, nullable=true)
     */
    private $data;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAccess(): ?int
    {
        return $this->access;
    }

    public function setAccess(int $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
