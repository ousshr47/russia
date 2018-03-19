<?php

namespace Russia\RussiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cafes
 *
 * @ORM\Table(name="cafes", indexes={@ORM\Index(name="idville", columns={"idville"})})
 * @ORM\Entity
 */
class Cafes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcafe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcafe;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcafe", type="string", length=50, nullable=false)
     */
    private $nomcafe;

    /**
     * @var string
     *
     * @ORM\Column(name="detailscafe", type="string", length=200, nullable=false)
     */
    private $detailscafe;

    /**
     * @var string
     *
     * @ORM\Column(name="positioncafe", type="string", length=50, nullable=false)
     */
    private $positioncafe;

    /**
     * @var string
     *
     * @ORM\Column(name="photocafe", type="string", length=50, nullable=false)
     */
    private $photocafe;

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

