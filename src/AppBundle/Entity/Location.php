<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="open_hours", type="time")
     */
    private $openHours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="close_hour", type="time")
     */
    private $closeHour;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
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
     * Set address
     *
     * @param string $address
     *
     * @return Location
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set openHours
     *
     * @param \DateTime $openHours
     *
     * @return Location
     */
    public function setOpenHours($openHours)
    {
        $this->openHours = $openHours;

        return $this;
    }

    /**
     * Get openHours
     *
     * @return \DateTime
     */
    public function getOpenHours()
    {
        return $this->openHours;
    }

    /**
     * Set closeHour
     *
     * @param \DateTime $closeHour
     *
     * @return Location
     */
    public function setCloseHour($closeHour)
    {
        $this->closeHour = $closeHour;

        return $this;
    }

    /**
     * Get closeHour
     *
     * @return \DateTime
     */
    public function getCloseHour()
    {
        return $this->closeHour;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Location
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}

