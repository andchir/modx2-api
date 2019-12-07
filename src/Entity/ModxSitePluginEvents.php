<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSitePluginEvents
 *
 * @ORM\Table(name="modx_site_plugin_events", indexes={@ORM\Index(name="priority", columns={"priority"})})
 * @ORM\Entity
 */
class ModxSitePluginEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="pluginid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pluginid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $event = '';

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="propertyset", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $propertyset = '0';

    public function getPluginid(): ?int
    {
        return $this->pluginid;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPropertyset(): ?int
    {
        return $this->propertyset;
    }

    public function setPropertyset(int $propertyset): self
    {
        $this->propertyset = $propertyset;

        return $this;
    }


}
