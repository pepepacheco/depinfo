<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserControlBundle\Entity\User;
use AppBundle\Entity\Sala;

/**
 * Mensaje
 *
 * @ORM\Table(name="mensaje")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MensajeRepository")
 */
class Mensaje
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserControlBundle\Entity\User", inversedBy="mensajes")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @Assert\NotNull(message="No puede dejar el campo vacio")
     */
    private $user;

    /**
     * @var Sala
     *
     * @ORM\ManyToOne(targetEntity="UserControlBundle\Entity\Sala", inversedBy="mensajes")
     * @ORM\JoinColumn(name="sala_id", referencedColumnName="id")
     * @Assert\NotNull(message="No puede dejar el campo vacio")
     */
    private $sala;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set idUser
     *
     * @param integer $idUser
     * @return Mensaje
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idSala
     *
     * @param integer $idSala
     * @return Mensaje
     */
    public function setIdSala($idSala)
    {
        $this->idSala = $idSala;

        return $this;
    }

    /**
     * Get idSala
     *
     * @return integer 
     */
    public function getIdSala()
    {
        return $this->idSala;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Mensaje
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Mensaje
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \UserControlBundle\Entity\User $user
     * @return Mensaje
     */
    public function setUser(\UserControlBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserControlBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set sala
     *
     * @param \UserControlBundle\Entity\Sala $sala
     * @return Mensaje
     */
    public function setSala(\UserControlBundle\Entity\Sala $sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return \UserControlBundle\Entity\Sala
     */
    public function getSala()
    {
        return $this->sala;
    }
}
