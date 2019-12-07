<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxActionsFields
 *
 * @ORM\Table(name="modx_actions_fields", indexes={@ORM\Index(name="type", columns={"type"}), @ORM\Index(name="action", columns={"action"}), @ORM\Index(name="tab", columns={"tab"})})
 * @ORM\Entity
 */
class ModxActionsFields
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
     * @ORM\Column(name="action", type="string", length=191, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false, options={"default"="field"})
     */
    private $type = 'field';

    /**
     * @var string
     *
     * @ORM\Column(name="tab", type="string", length=191, nullable=false)
     */
    private $tab = '';

    /**
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=191, nullable=false)
     */
    private $form = '';

    /**
     * @var string
     *
     * @ORM\Column(name="other", type="string", length=191, nullable=false)
     */
    private $other = '';

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTab(): ?string
    {
        return $this->tab;
    }

    public function setTab(string $tab): self
    {
        $this->tab = $tab;

        return $this;
    }

    public function getForm(): ?string
    {
        return $this->form;
    }

    public function setForm(string $form): self
    {
        $this->form = $form;

        return $this;
    }

    public function getOther(): ?string
    {
        return $this->other;
    }

    public function setOther(string $other): self
    {
        $this->other = $other;

        return $this;
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
