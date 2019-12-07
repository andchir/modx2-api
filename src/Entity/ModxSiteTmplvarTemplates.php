<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxSiteTmplvarTemplates
 *
 * @ORM\Table(name="modx_site_tmplvar_templates")
 * @ORM\Entity
 */
class ModxSiteTmplvarTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="tmplvarid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tmplvarid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="templateid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $templateid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    public function getTmplvarid(): ?int
    {
        return $this->tmplvarid;
    }

    public function getTemplateid(): ?int
    {
        return $this->templateid;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }


}
