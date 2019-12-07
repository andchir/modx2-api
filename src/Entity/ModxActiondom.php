<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxActiondom
 *
 * @ORM\Table(name="modx_actiondom", indexes={@ORM\Index(name="action", columns={"action"}), @ORM\Index(name="active", columns={"active"}), @ORM\Index(name="rank", columns={"rank"}), @ORM\Index(name="set", columns={"set"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="for_parent", columns={"for_parent"})})
 * @ORM\Entity
 */
class ModxActiondom
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
     * @ORM\Column(name="set", type="integer", nullable=false)
     */
    private $set = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="xtype", type="string", length=100, nullable=false)
     */
    private $xtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="container", type="string", length=191, nullable=false)
     */
    private $container = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rule", type="string", length=100, nullable=false)
     */
    private $rule = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

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

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="for_parent", type="boolean", nullable=false)
     */
    private $forParent = '0';

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

    public function getSet(): ?int
    {
        return $this->set;
    }

    public function setSet(int $set): self
    {
        $this->set = $set;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getXtype(): ?string
    {
        return $this->xtype;
    }

    public function setXtype(string $xtype): self
    {
        $this->xtype = $xtype;

        return $this;
    }

    public function getContainer(): ?string
    {
        return $this->container;
    }

    public function setContainer(string $container): self
    {
        $this->container = $container;

        return $this;
    }

    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(string $rule): self
    {
        $this->rule = $rule;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getForParent(): ?bool
    {
        return $this->forParent;
    }

    public function setForParent(bool $forParent): self
    {
        $this->forParent = $forParent;

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
