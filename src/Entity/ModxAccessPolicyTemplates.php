<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxAccessPolicyTemplates
 *
 * @ORM\Table(name="modx_access_policy_templates")
 * @ORM\Entity
 */
class ModxAccessPolicyTemplates
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
     * @ORM\Column(name="template_group", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $templateGroup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lexicon", type="string", length=191, nullable=false, options={"default"="permissions"})
     */
    private $lexicon = 'permissions';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemplateGroup(): ?int
    {
        return $this->templateGroup;
    }

    public function setTemplateGroup(int $templateGroup): self
    {
        $this->templateGroup = $templateGroup;

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

    public function getLexicon(): ?string
    {
        return $this->lexicon;
    }

    public function setLexicon(string $lexicon): self
    {
        $this->lexicon = $lexicon;

        return $this;
    }


}
