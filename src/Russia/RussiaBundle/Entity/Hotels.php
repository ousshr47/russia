<?php

namespace Russia\RussiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotels
 *
 * @ORM\Table(name="hotels", indexes={@ORM\Index(name="idville", columns={"idville"})})
 * @ORM\Entity
 */
class Hotels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="nomhotel", type="string", length=50, nullable=false)
     */
    private $nomhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="detailshotel", type="string", length=200, nullable=false)
     */
    private $detailshotel;

    /**
     * @var string
     *
     * @ORM\Column(name="positionhotel", type="string", length=50, nullable=false)
     */
    private $positionhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="photohotel", type="string", length=50, nullable=false)
     */
    private $photohotel;

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

