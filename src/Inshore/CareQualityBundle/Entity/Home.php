<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Home
 *
 * @ORM\Table(name="inshore_home")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\HomeRepository")
 */
class Home
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
     * @ORM\Column(name="Name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=255)
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Inshore\CareQualityBundle\Entity\ServiceUser", mappedBy="Home")
     */
    private $ServiceUsers;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\ServiceType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ServiceType;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneIntern", type="string", length=255)
     */
    private $phoneIntern;






    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Home
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Home
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ServiceUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add serviceUser.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser
     *
     * @return Home
     */
    public function addServiceUser(\Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser)
    {
        $this->ServiceUsers[] = $serviceUser;

        return $this;
    }

    /**
     * Remove serviceUser.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeServiceUser(\Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser)
    {
        return $this->ServiceUsers->removeElement($serviceUser);
    }

    /**
     * Get serviceUsers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceUsers()
    {
        return $this->ServiceUsers;
    }

    /**
     * Set phone.
     *
     * @param string $phone
     *
     * @return Home
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneIntern.
     *
     * @param string $phoneIntern
     *
     * @return Home
     */
    public function setPhoneIntern($phoneIntern)
    {
        $this->phoneIntern = $phoneIntern;

        return $this;
    }

    /**
     * Get phoneIntern.
     *
     * @return string
     */
    public function getPhoneIntern()
    {
        return $this->phoneIntern;
    }

    /**
     * Set serviceType.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceType $serviceType
     *
     * @return Home
     */
    public function setServiceType(\Inshore\CareQualityBundle\Entity\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;

        return $this;
    }

    /**
     * Get serviceType.
     *
     * @return \Inshore\CareQualityBundle\Entity\ServiceType
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
}
