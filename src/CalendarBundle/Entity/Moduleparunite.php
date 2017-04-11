<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduleparunite
 *
 * @ORM\Table(name="ModuleParUnite", indexes={@ORM\Index(name="IDX_53FF79899643ECE4", columns={"IdModule"}), @ORM\Index(name="IDX_53FF7989C51DBB99", columns={"IdUnite"})})
 * @ORM\Entity
 */
class Moduleparunite
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
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdModule", referencedColumnName="IdModule")
     * })
     */
    private $idmodule;

    /**
     * @var \Uniteparformation
     *
     * @ORM\ManyToOne(targetEntity="Uniteparformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUnite", referencedColumnName="Id")
     * })
     */
    private $idunite;


}

