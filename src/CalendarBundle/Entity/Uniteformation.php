<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniteformation
 *
 * @ORM\Table(name="UniteFormation")
 * @ORM\Entity
 */
class Uniteformation
{
    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnHeures", type="smallint", nullable=false)
     */
    private $dureeenheures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeEnSemaines", type="smallint", nullable=false)
     */
    private $dureeensemaines;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCourt", type="string", length=10, nullable=false)
     */
    private $libellecourt;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdUniteFormation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduniteformation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';


}

