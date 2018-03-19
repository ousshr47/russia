<?php

namespace Russia\RussiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stades
 *
 * @ORM\Table(name="stades", indexes={@ORM\Index(name="idville", columns={"idville"})})
 * @ORM\Entity
 */
class Stades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idstade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idstade;

    /**
     * @var string
     *
     * @ORM\Column(name="nomstade", type="string", length=50, nullable=false)
     */
    private $nomstade;

    /**
     * @var string
     *
     * @ORM\Column(name="fondationstade", type="string", length=4, nullable=false)
     */
    private $fondationstade;

    /**
     * @var string
     *
     * @ORM\Column(name="capacitestade", type="string", length=50, nullable=false)
     */
    private $capacitestade;

    /**
     * @var string
     *
     * @ORM\Column(name="photostade", type="string", length=100, nullable=false)
     */
    private $photostade;

    /**
     * @var string
     *
     * @ORM\Column(name="equipestade", type="string", length=50, nullable=false)
     */
    private $equipestade;

    /**
     * @var string
     *
     * @ORM\Column(name="positionstade", type="string", length=50, nullable=false)
     */
    private $positionstade;

    /**
     * @var \Villes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Villes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idville", referencedColumnName="idville")
     * })
     */
    private $idville;


}

