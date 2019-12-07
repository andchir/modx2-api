<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSiteTmplvarAccess
 *
 * @ORM\Table(name="modx_site_tmplvar_access", indexes={@ORM\Index(name="tmplvar_template", columns={"tmplvarid", "documentgroup"})})
 * @ORM\Entity
 */
class ModxSiteTmplvarAccess
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
     * @ORM\Column(name="tmplvarid", type="integer", nullable=false)
     */
    private $tmplvarid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="documentgroup", type="integer", nullable=false)
     */
    private $documentgroup = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTmplvarid(): ?int
    {
        return $this->tmplvarid;
    }

    public function setTmplvarid(int $tmplvarid): self
    {
        $this->tmplvarid = $tmplvarid;

        return $this;
    }

    public function getDocumentgroup(): ?int
    {
        return $this->documentgroup;
    }

    public function setDocumentgroup(int $documentgroup): self
    {
        $this->documentgroup = $documentgroup;

        return $this;
    }


}
