<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * ModxUsers
 *
 * @ORM\Table(name="modx_users", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="class_key", columns={"class_key"}), @ORM\Index(name="primary_group", columns={"primary_group"}), @ORM\Index(name="remote_key", columns={"remote_key"})})
 * @ORM\Entity
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 */
class ModxUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"read", "write"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     * @Groups({"read", "write"})
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Groups("write")
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cachepwd", type="string", length=255, nullable=false)
     * @Groups("write")
     */
    private $cachepwd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="class_key", type="string", length=100, nullable=false, options={"default"="modUser"})
     * @Groups({"read", "write"})
     */
    private $classKey = 'modUser';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     * @Groups({"read", "write"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_key", type="string", length=191, nullable=true)
     * @Groups({"read", "write"})
     */
    private $remoteKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_data", type="text", length=65535, nullable=true)
     * @Groups({"read", "write"})
     */
    private $remoteData;

    /**
     * @var string
     *
     * @ORM\Column(name="hash_class", type="string", length=100, nullable=false, options={"default"="hashing.modNative"})
     * @Groups("write")
     */
    private $hashClass = 'hashing.modNative';

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=100, nullable=false)
     * @Groups("write")
     */
    private $salt = '';

    /**
     * @var int
     *
     * @ORM\Column(name="primary_group", type="integer", nullable=false, options={"unsigned"=true})
     * @Groups({"read", "write"})
     */
    private $primaryGroup = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_stale", type="text", length=65535, nullable=true)
     * @Groups({"read", "write"})
     */
    private $sessionStale;

    /**
     * @var bool
     *
     * @ORM\Column(name="sudo", type="boolean", nullable=false)
     * @Groups({"read", "write"})
     */
    private $sudo = '0';

    /**
     * @var ModxUserAttributes
     *
     * @ORM\OneToOne(targetEntity="ModxUserAttributes", mappedBy="user")
     * @Groups({"read"})
     */
    private $attributes;

    /**
     * @var int
     *
     * @ORM\Column(name="createdon", type="integer", nullable=false)
     * @Groups({"read", "write"})
     */
    private $createdon = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCachepwd(): ?string
    {
        return $this->cachepwd;
    }

    public function setCachepwd(string $cachepwd): self
    {
        $this->cachepwd = $cachepwd;

        return $this;
    }

    public function getClassKey(): ?string
    {
        return $this->classKey;
    }

    public function setClassKey(string $classKey): self
    {
        $this->classKey = $classKey;

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

    public function getRemoteKey(): ?string
    {
        return $this->remoteKey;
    }

    public function setRemoteKey(?string $remoteKey): self
    {
        $this->remoteKey = $remoteKey;

        return $this;
    }

    public function getRemoteData(): ?string
    {
        return $this->remoteData;
    }

    public function setRemoteData(?string $remoteData): self
    {
        $this->remoteData = $remoteData;

        return $this;
    }

    public function getHashClass(): ?string
    {
        return $this->hashClass;
    }

    public function setHashClass(string $hashClass): self
    {
        $this->hashClass = $hashClass;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getPrimaryGroup(): ?int
    {
        return $this->primaryGroup;
    }

    public function setPrimaryGroup(int $primaryGroup): self
    {
        $this->primaryGroup = $primaryGroup;

        return $this;
    }

    public function getSessionStale(): ?string
    {
        return $this->sessionStale;
    }

    public function setSessionStale(?string $sessionStale): self
    {
        $this->sessionStale = $sessionStale;

        return $this;
    }

    public function getSudo(): ?bool
    {
        return $this->sudo;
    }

    public function setSudo(bool $sudo): self
    {
        $this->sudo = $sudo;

        return $this;
    }

    public function getCreatedon(): ?int
    {
        return $this->createdon;
    }

    public function setCreatedon(int $createdon): self
    {
        $this->createdon = $createdon;

        return $this;
    }

    public function getAttributes(): ?ModxUserAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(?ModxUserAttributes $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }


}
