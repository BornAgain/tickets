<?php

namespace ITSS\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITSS\TicketsBundle\Entity\TicketRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Ticket {

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime")
     */
    private $dateCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdit", type="datetime")
     */
    private $dateEdit;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="ITSS\TicketsBundle\Entity\Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;

    /**
     * @ORM\OneToMany(targetEntity="ITSS\TicketsBundle\Entity\Comment", mappedBy="ticket",cascade={"remove", "persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $comment;
    
  /**
     * @ORM\ManyToOne(targetEntity="ITSS\UserBundle\Entity\User")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Ticket
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return Ticket
     */
    public function setDateCreate($dateCreate) {
        $this->dateCreate = $dateCreate;
        

        return $this;
    }
/**
 * @ORM\PrePersist
 */
    public function updateDateCreate() {
        $this->setDateCreate(new \Datetime());
        $this->setDateEdit(new \Datetime());
        
        return $this;
    }      

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate() {
        return $this->dateCreate;
    }

    /**
     * Set dateEdit
     *
     * @param \DateTime $dateEdit
     * @return Ticket
     */
    public function setDateEdit($dateEdit) {
        $this->dateEdit = $dateEdit;

        return $this;
    }

    
  
    
/**
 * @ORM\PreUpdate
 */
    public function updateDateEdit() {
        $this->setDateEdit(new \Datetime());
        
        return $this;
    }

    /**
     * Get dateEdit
     *
     * @return \DateTime 
     */
    public function getDateEdit() {
        return $this->dateEdit;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Ticket
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set projet
     *
     * @param \ITSS\Tickets\Entity\Projet $projet
     * @return Ticket
     */
    public function setProjet(Projet $projet) {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \ITSS\Tickets\\Entity\Projet 
     */
    public function getProjet() {
        return $this->projet;
    }

    public function __toString() {
        return $this->title;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \ITSS\TicketsBundle\Entity\Comment $comment
     * @return Ticket
     */
    public function addComment(\ITSS\TicketsBundle\Entity\Comment $comment) {
        $this->comment[] = $comment;
        $comment->setTicket($this);
        return $this;
    }

    /**
     * Remove comment
     *
     * @param \ITSS\TicketsBundle\Entity\Comment $comment
     */
    public function removeComment(\ITSS\TicketsBundle\Entity\Comment $comment) {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment() {
        return $this->comment;
    }


    /**
     * Set user
     *
     * @param \ITSS\UserBundle\Entity\User $user
     * @return Ticket
     */
    public function setUser(\ITSS\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ITSS\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
