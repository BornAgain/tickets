<?php

namespace AC\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AC\MediaBundle\Entity\FileRepository")
 */
class File {

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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=500)
     */
    private $url;
    
    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=500)
     */
    private $file;

    /**
     * @ORM\ManyToOne(targetEntity="AC\MediaBundle\Entity\Evenement",cascade={"persist"},inversedBy="files")
     * @ORM\JoinColumn(nullable=True)
     */
    private $evenement;

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
     *
     * @return File
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
     * Set type
     *
     * @param string $type
     *
     * @return File
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
     * Set url
     *
     * @param string $url
     *
     * @return File
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set evenement
     *
     * @param \AC\MediaBundle\Entity\Evenement $evenement
     *
     * @return File
     */
    public function setEvenement(\AC\MediaBundle\Entity\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \AC\MediaBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set audio
     *
     * @param string $audio
     *
     * @return File
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return string
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return File
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
}
