<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="Module")
 * @ORM\Entity
 */
class Module
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
     * @var float
     *
     * @ORM\Column(name="PrixPublicEnCours", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixpublicencours;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCourt", type="string", length=20, nullable=false)
     */
    private $libellecourt;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeModule", type="integer", nullable=true)
     */
    private $typemodule;


}

