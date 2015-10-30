<?php

namespace ITSS\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITSS\TicketsBundle\Entity\ClientRepository")
 */
class Client {

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
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;
    
    
        /**
     * @ORM\OneToMany(targetEntity="ITSS\TicketsBundle\Entity\Projet", mappedBy="client",cascade={"remove", "persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $projects;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Client
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry() {
        return $this->country;
    }

    public function __toString() {
        return $this->name;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projects
     *
     * @param \ITSS\TicketsBundle\Entity\Projet $projects
     * @return Client
     */
    public function addProject(\ITSS\TicketsBundle\Entity\Projet $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \ITSS\TicketsBundle\Entity\Projet $projects
     */
    public function removeProject(\ITSS\TicketsBundle\Entity\Projet $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
    
    
}
