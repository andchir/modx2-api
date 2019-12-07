<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSystemEventnames
 *
 * @ORM\Table(name="modx_system_eventnames")
 * @ORM\Entity
 */
class ModxSystemEventnames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="service", type="boolean", nullable=false)
     */
    private $service = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="groupname", type="string", length=20, nullable=false)
     */
    private $groupname = '';

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getService(): ?bool
    {
        return $this->service;
    }

    public function setService(bool $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getGroupname(): ?string
    {
        return $this->groupname;
    }

    public function setGroupname(string $groupname): self
    {
        $this->groupname = $groupname;

        return $this;
    }


}
