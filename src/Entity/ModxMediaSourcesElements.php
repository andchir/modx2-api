<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMediaSourcesElements
 *
 * @ORM\Table(name="modx_media_sources_elements")
 * @ORM\Entity
 */
class ModxMediaSourcesElements
{
    /**
     * @var int
     *
     * @ORM\Column(name="source", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $source = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="object_class", type="string", length=100, nullable=false, options={"default"="modTemplateVar"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objectClass = 'modTemplateVar';

    /**
     * @var int
     *
     * @ORM\Column(name="object", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $object = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="context_key", type="string", length=100, nullable=false, options={"default"="web"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contextKey = 'web';

    public function getSource(): ?int
    {
        return $this->source;
    }

    public function getObjectClass(): ?string
    {
        return $this->objectClass;
    }

    public function getObject(): ?int
    {
        return $this->object;
    }

    public function getContextKey(): ?string
    {
        return $this->contextKey;
    }


}
