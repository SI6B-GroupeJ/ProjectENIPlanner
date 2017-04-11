<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniteparformation
 *
 * @ORM\Table(name="UniteParFormation", indexes={@ORM\Index(name="IDX_C1E36CE8A68ED5A2", columns={"CodeFormation"}), @ORM\Index(name="IDX_C1E36CE86837EF81", columns={"IdUniteFormation"})})
 * @ORM\Entity
 */
class Uniteparformation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeFormation", referencedColumnName="CodeFormation")
     * })
     */
    private $codeformation;

    /**
     * @var \Uniteformation
     *
     * @ORM\ManyToOne(targetEntity="Uniteformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUniteFormation", referencedColumnName="IdUniteFormation")
     * })
     */
    private $iduniteformation;


}

