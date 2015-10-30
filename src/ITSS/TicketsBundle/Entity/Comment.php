<?php

namespace ITSS\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ITSS\TicketsBundle\Entity\CommentRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment {

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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdit", type="datetime")
     */
    private $dateEdit;

    /**
     * @ORM\ManyToOne(targetEntity="ITSS\TicketsBundle\Entity\Ticket")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ticket;

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
     * Set content
     *
     * @param string $content
     * @return Comment
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
     * Set datetime
     *
     * @param \DateTime $datetime
     * @return Comment
     */
    public function setDatetime($datetime) {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function updateDatetime() {
        $this->setDatetime(new \Datetime());
        $this->setDateEdit(new \Datetime());

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime 
     */
    public function getDatetime() {
        return $this->datetime;
    }

    /**
     * Set dateEdit
     *
     * @param \DateTime $dateEdit
     * @return Comment
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
     * Set ticket
     *
     * @param \ITSS\TicketsBundle\Entity\Ticket $ticket
     * @return Comment
     */
    public function setTicket(\ITSS\TicketsBundle\Entity\Ticket $ticket) {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \ITSS\TicketsBundle\Entity\Ticket 
     */
    public function getTicket() {
        return $this->ticket;
    }

    public function __toString() {
        return $this->content;
    }


    /**
     * Set user
     *
     * @param \ITSS\UserBundle\Entity\User $user
     * @return Comment
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
