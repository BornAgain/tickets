<?php

namespace AC\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Evenement
 *
 * @ORM\Table()
 * @Gedmo\SoftDeleteable(fieldName="deletedAt",timeAware=false)
 * @ORM\Entity(repositoryClass="AC\MediaBundle\Entity\EvenementRepository")
 */
class Evenement {

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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="AC\MediaBundle\Entity\Serviteur",cascade={"persist"})
     * @ORM\JoinColumn(nullable=True)
     */
    private $orateur;

    /**
     * @ORM\ManyToOne(targetEntity="AC\MediaBundle\Entity\Serviteur",cascade={"persist"})
     * @ORM\JoinColumn(nullable=True)
     */
    private $conducteur;

    /**
     * @ORM\ManyToOne(targetEntity="AC\MediaBundle\Entity\ThemeDuMois",cascade={"persist"})
     * @ORM\JoinColumn(nullable=True)
     */
    private $themeMois;

    /**
     * @var string
     *
     * @ORM\Column(name="choeur", type="string", length=255)
     */
    private $choeur;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255)
     */
    private $tags;

    /**
     * @ORM\OneToMany(targetEntity="AC\MediaBundle\Entity\File", mappedBy="evenement", cascade={"remove", "persist"})
     * 
     */
    protected $files;

    /**
     * @var \DateTime $deletedAt
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Evenement
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \Date $date
     * @return Evenement
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Date 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set orateur
     *
     * @param string $orateur
     * @return Evenement
     */
    public function setOrateur($orateur) {
        $this->orateur = $orateur;

        return $this;
    }

    /**
     * Get orateur
     *
     * @return string 
     */
    public function getOrateur() {
        return $this->orateur;
    }

    /**
     * Set choeur
     *
     * @param string $choeur
     * @return Evenement
     */
    public function setChoeur($choeur) {
        $this->choeur = $choeur;

        return $this;
    }

    /**
     * Get choeur
     *
     * @return string 
     */
    public function getChoeur() {
        return $this->choeur;
    }

    /**
     * Set conducteur
     *
     * @param string $conducteur
     * @return Evenement
     */
    public function setConducteur($conducteur) {
        $this->conducteur = $conducteur;

        return $this;
    }

    /**
     * Get conducteur
     *
     * @return string 
     */
    public function getConducteur() {
        return $this->conducteur;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Evenement
     */
    public function setTheme($theme) {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme() {
        return $this->theme;
    }

    /**
     * Set themeMois
     *
     * @param \AC\MediaBundle\Entity\ThemeDuMois $themeMois
     * @return Evenement
     */
    public function setThemeMois(\AC\MediaBundle\Entity\ThemeDuMois $themeMois = null) {
        $this->themeMois = $themeMois;

        return $this;
    }

    /**
     * Get themeMois
     *
     * @return \AC\MediaBundle\Entity\ThemeDuMois 
     */
    public function getThemeMois() {
        return $this->themeMois;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Evenement
     */
    public function setTags($tags) {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Evenement
     */
    public function setDeletedAt($deletedAt) {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt() {
        return $this->deletedAt;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->files = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add file
     *
     * @param \AC\MediaBundle\Entity\File $file
     *
     * @return Evenement
     */
    public function addFile(File $file)
    {
        $this->files[] = $file;

        return $this;
    }

    /**
     * Remove file
     *
     * @param \AC\MediaBundle\Entity\File $file
     */
    public function removeFile(File $file)
    {
        $this->files->removeElement($file);
    }

    /**
     * Get files
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiles()
    {
        return $this->files;
    }
}
