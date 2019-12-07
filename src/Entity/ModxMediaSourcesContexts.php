<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMediaSourcesContexts
 *
 * @ORM\Table(name="modx_media_sources_contexts")
 * @ORM\Entity
 */
class ModxMediaSourcesContexts
{
    /**
     * @var int
     *
     * @ORM\Column(name="source", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $source = '0';

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

    public function getContextKey(): ?string
    {
        return $this->contextKey;
    }


}
