<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxElementPropertySets
 *
 * @ORM\Table(name="modx_element_property_sets")
 * @ORM\Entity
 */
class ModxElementPropertySets
{
    /**
     * @var int
     *
     * @ORM\Column(name="element", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $element = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="element_class", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $elementClass = '';

    /**
     * @var int
     *
     * @ORM\Column(name="property_set", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $propertySet = '0';

    public function getElement(): ?int
    {
        return $this->element;
    }

    public function getElementClass(): ?string
    {
        return $this->elementClass;
    }

    public function getPropertySet(): ?int
    {
        return $this->propertySet;
    }


}
