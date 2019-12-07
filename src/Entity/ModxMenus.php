<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxMenus
 *
 * @ORM\Table(name="modx_menus", indexes={@ORM\Index(name="namespace", columns={"namespace"}), @ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="action", columns={"action"})})
 * @ORM\Entity
 */
class ModxMenus
{
    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $text = '';

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=191, nullable=false)
     */
    private $parent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=191, nullable=false)
     */
    private $action = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=191, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=191, nullable=false)
     */
    private $icon = '';

    /**
     * @var int
     *
     * @ORM\Column(name="menuindex", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $menuindex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", length=65535, nullable=false)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="handler", type="text", length=65535, nullable=false)
     */
    private $handler;

    /**
     * @var string
     *
     * @ORM\Column(name="permissions", type="text", length=65535, nullable=false)
     */
    private $permissions;

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=100, nullable=false, options={"default"="core"})
     */
    private $namespace = 'core';

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->parent = $parent;

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

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getMenuindex(): ?int
    {
        return $this->menuindex;
    }

    public function setMenuindex(int $menuindex): self
    {
        $this->menuindex = $menuindex;

        return $this;
    }

    public function getParams(): ?string
    {
        return $this->params;
    }

    public function setParams(string $params): self
    {
        $this->params = $params;

        return $this;
    }

    public function getHandler(): ?string
    {
        return $this->handler;
    }

    public function setHandler(string $handler): self
    {
        $this->handler = $handler;

        return $this;
    }

    public function getPermissions(): ?string
    {
        return $this->permissions;
    }

    public function setPermissions(string $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }


}
