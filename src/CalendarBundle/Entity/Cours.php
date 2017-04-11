<?php

namespace CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="Cours", indexes={@ORM\Index(name="IDX_3C0BA3989643ECE4", columns={"IdModule"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Debut", type="datetime", nullable=false)
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fin", type="datetime", nullable=false)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureeReelleEnHeures", type="smallint", nullable=false)
     */
    private $dureereelleenheures;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePromotion", type="string", length=8, nullable=true)
     */
    private $codepromotion;

    /**
     * @var guid
     *
     * @ORM\Column(name="IdCours", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixPublicAffecte", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixpublicaffecte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleCours", type="string", length=50, nullable=false)
     */
    private $libellecours;

    /**
     * @var integer
     *
     * @ORM\Column(name="DureePrevueEnHeures", type="smallint", nullable=false)
     */
    private $dureeprevueenheures;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DateAdefinir", type="boolean", nullable=false)
     */
    private $dateadefinir = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeSalle", type="string", length=5, nullable=true)
     */
    private $codesalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeFormateur", type="integer", nullable=true)
     */
    private $codeformateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodeLieu", type="integer", nullable=true)
     */
    private $codelieu;

    /**
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdModule", referencedColumnName="IdModule")
     * })
     */
    private $idmodule;


}

