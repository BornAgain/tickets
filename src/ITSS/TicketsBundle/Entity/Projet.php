<?php

namespace ITSS\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITSS\TicketsBundle\Entity\ProjetRepository")
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateBegin", type="datetime")
     * @ORM\JoinColumn(nullable=true)
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="datetime")
     * @ORM\JoinColumn(nullable=true)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;


   /**
   * @ORM\ManyToOne(targetEntity="ITSS\TicketsBundle\Entity\Client",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $client;
    
   /**
   * @ORM\ManyToOne(targetEntity="ITSS\TicketsBundle\Entity\Product",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $product;    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Projet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     * @return Projet
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime 
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Projet
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Projet
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set client
     *
     * @param \ITSS\TicketsBundle\Entity\Client $client
     * @return Projet
     */
    public function setClient(\ITSS\TicketsBundle\Entity\Client $client)
    {
        $this->client = $client;
        $client->addProject($this);

        return $this;
    }

    /**
     * Get client
     *
     * @return \ITSS\TicketsBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set product
     *
     * @param \ITSS\TicketsBundle\Entity\Product $product
     * @return Projet
     */
    public function setProduct(\ITSS\TicketsBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \ITSS\TicketsBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    

    public function __toString() {
        return $this->name;
    }    
}
