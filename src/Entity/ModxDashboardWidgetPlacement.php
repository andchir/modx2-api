<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxDashboardWidgetPlacement
 *
 * @ORM\Table(name="modx_dashboard_widget_placement", indexes={@ORM\Index(name="rank", columns={"rank"})})
 * @ORM\Entity
 */
class ModxDashboardWidgetPlacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="dashboard", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dashboard = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="widget", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $widget = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rank = '0';

    public function getDashboard(): ?int
    {
        return $this->dashboard;
    }

    public function getWidget(): ?int
    {
        return $this->widget;
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
