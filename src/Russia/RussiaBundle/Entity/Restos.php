<?php

namespace Russia\RussiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restos
 *
 * @ORM\Table(name="restos", indexes={@ORM\Index(name="idville", columns={"idville"})})
 * @ORM\Entity
 */
class Restos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idresto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idresto;

    /**
     * @var string
     *
     * @ORM\Column(name="nomresto", type="string", length=50, nullable=false)
     */
    private $nomresto;

    /**
     * @var string
     *
     * @ORM\Column(name="detailsresto", type="string", length=200, nullable=false)
     */
    private $detailsresto;

    /**
     * @var string
     *
     * @ORM\Column(name="positionresto", type="string", length=50, nullable=false)
     */
    private $positionresto;

    /**
     * @var string
     *
     * @ORM\Column(name="photoresto", type="string", length=50, nullable=false)
     */
    private $photoresto;

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

