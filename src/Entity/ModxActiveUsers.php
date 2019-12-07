<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxActiveUsers
 *
 * @ORM\Table(name="modx_active_users")
 * @ORM\Entity
 */
class ModxActiveUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="internalKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $internalkey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username = '';

    /**
     * @var int
     *
     * @ORM\Column(name="lasthit", type="integer", nullable=false)
     */
    private $lasthit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=191, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

    public function getInternalkey(): ?int
    {
        return $this->internalkey;
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

    public function getLasthit(): ?int
    {
        return $this->lasthit;
    }

    public function setLasthit(int $lasthit): self
    {
        $this->lasthit = $lasthit;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }


}
