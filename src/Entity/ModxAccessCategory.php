<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxAccessCategory
 *
 * @ORM\Table(name="modx_access_category", indexes={@ORM\Index(name="principal", columns={"principal"}), @ORM\Index(name="policy", columns={"policy"}), @ORM\Index(name="target", columns={"target"}), @ORM\Index(name="authority", columns={"authority"}), @ORM\Index(name="context_key", columns={"context_key"}), @ORM\Index(name="principal_class", columns={"principal_class"})})
 * @ORM\Entity
 */
class ModxAccessCategory
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
     * @ORM\Column(name="target", type="string", length=100, nullable=false)
     */
    private $target = '';

    /**
     * @var string
     *
     * @ORM\Column(name="principal_class", type="string", length=100, nullable=false, options={"default"="modPrincipal"})
     */
    private $principalClass = 'modPrincipal';

    /**
     * @var int
     *
     * @ORM\Column(name="principal", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $principal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="authority", type="integer", nullable=false, options={"default"="9999","unsigned"=true})
     */
    private $authority = '9999';

    /**
     * @var int
     *
     * @ORM\Column(name="policy", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $policy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="context_key", type="string", length=100, nullable=false)
     */
    private $contextKey = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getPrincipalClass(): ?string
    {
        return $this->principalClass;
    }

    public function setPrincipalClass(string $principalClass): self
    {
        $this->principalClass = $principalClass;

        return $this;
    }

    public function getPrincipal(): ?int
    {
        return $this->principal;
    }

    public function setPrincipal(int $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getAuthority(): ?int
    {
        return $this->authority;
    }

    public function setAuthority(int $authority): self
    {
        $this->authority = $authority;

        return $this;
    }

    public function getPolicy(): ?int
    {
        return $this->policy;
    }

    public function setPolicy(int $policy): self
    {
        $this->policy = $policy;

        return $this;
    }

    public function getContextKey(): ?string
    {
        return $this->contextKey;
    }

    public function setContextKey(string $contextKey): self
    {
        $this->contextKey = $contextKey;

        return $this;
    }


}
