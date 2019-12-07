<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSiteTmplvarContentvalues
 *
 * @ORM\Table(name="modx_site_tmplvar_contentvalues", uniqueConstraints={@ORM\UniqueConstraint(name="tv_cnt", columns={"tmplvarid", "contentid"})}, indexes={@ORM\Index(name="contentid", columns={"contentid"}), @ORM\Index(name="tmplvarid", columns={"tmplvarid"})})
 * @ORM\Entity
 */
class ModxSiteTmplvarContentvalues
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
     * @ORM\Column(name="contentid", type="integer", nullable=false)
     */
    private $contentid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=16777215, nullable=false)
     */
    private $value;

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

    public function getContentid(): ?int
    {
        return $this->contentid;
    }

    public function setContentid(int $contentid): self
    {
        $this->contentid = $contentid;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
