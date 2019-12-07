<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxFcSets
 *
 * @ORM\Table(name="modx_fc_sets", indexes={@ORM\Index(name="action", columns={"action"}), @ORM\Index(name="template", columns={"template"}), @ORM\Index(name="profile", columns={"profile"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class ModxFcSets
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
     * @ORM\Column(name="profile", type="integer", nullable=false)
     */
    private $profile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=191, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="template", type="integer", nullable=false)
     */
    private $template = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="constraint", type="string", length=191, nullable=false)
     */
    private $constraint = '';

    /**
     * @var string
     *
     * @ORM\Column(name="constraint_field", type="string", length=100, nullable=false)
     */
    private $constraintField = '';

    /**
     * @var string
     *
     * @ORM\Column(name="constraint_class", type="string", length=100, nullable=false)
     */
    private $constraintClass = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function setProfile(int $profile): self
    {
        $this->profile = $profile;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(int $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getConstraint(): ?string
    {
        return $this->constraint;
    }

    public function setConstraint(string $constraint): self
    {
        $this->constraint = $constraint;

        return $this;
    }

    public function getConstraintField(): ?string
    {
        return $this->constraintField;
    }

    public function setConstraintField(string $constraintField): self
    {
        $this->constraintField = $constraintField;

        return $this;
    }

    public function getConstraintClass(): ?string
    {
        return $this->constraintClass;
    }

    public function setConstraintClass(string $constraintClass): self
    {
        $this->constraintClass = $constraintClass;

        return $this;
    }


}
