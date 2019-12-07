<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxDocumentGroups
 *
 * @ORM\Table(name="modx_document_groups", indexes={@ORM\Index(name="document", columns={"document"}), @ORM\Index(name="document_group", columns={"document_group"})})
 * @ORM\Entity
 */
class ModxDocumentGroups
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
     * @ORM\Column(name="document_group", type="integer", nullable=false)
     */
    private $documentGroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="document", type="integer", nullable=false)
     */
    private $document = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocumentGroup(): ?int
    {
        return $this->documentGroup;
    }

    public function setDocumentGroup(int $documentGroup): self
    {
        $this->documentGroup = $documentGroup;

        return $this;
    }

    public function getDocument(): ?int
    {
        return $this->document;
    }

    public function setDocument(int $document): self
    {
        $this->document = $document;

        return $this;
    }


}
