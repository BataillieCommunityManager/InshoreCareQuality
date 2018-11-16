<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceUser
 *
 * @ORM\Table(name="inshore_service_user")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\ServiceUserRepository")
 */
class ServiceUser
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
     * @ORM\Column(name="FirstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\Home", inversedBy="ServiceUsers")
     */
    private $Home;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\Disability")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Disability;

    /**
     * @ORM\OneToMany(targetEntity="Inshore\CareQualityBundle\Entity\ServiceUser", mappedBy="CareData")
     */
    private $CareDatas;

    /**
     * @ORM\Column(name="CurrentClient", type="boolean")
     */
    private $currentClient;




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
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return ServiceUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return ServiceUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    

    /**
     * Set gender.
     *
     * @param string $gender
     *
     * @return ServiceUser
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }



    /**
     * Set Disability.
     *
     * @param string $Disability
     *
     * @return ServiceUser
     */
    public function setDisability($Disability)
    {
        $this->Disability = $Disability;

        return $this;
    }

    /**
     * Get Disability.
     *
     * @return string
     */
    public function getDisability()
    {
        return $this->Disability;
    }

    /**
     * Set dateOfBirth.
     *
     * @param \DateTime $dateOfBirth
     *
     * @return ServiceUser
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth.
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set home.
     *
     * @param \Inshore\CareQualityBundle\Entity\Home|null $home
     *
     * @return ServiceUser
     */
    public function setHome(\Inshore\CareQualityBundle\Entity\Home $home = null)
    {
        $this->Home = $home;

        return $this;
    }

    /**
     * Get home.
     *
     * @return \Inshore\CareQualityBundle\Entity\Home|null
     */
    public function getHome()
    {
        return $this->Home;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CareDatas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set currentClient.
     *
     * @param bool $currentClient
     *
     * @return ServiceUser
     */
    public function setCurrentClient($currentClient)
    {
        $this->currentClient = $currentClient;

        return $this;
    }

    /**
     * Get currentClient.
     *
     * @return bool
     */
    public function getCurrentClient()
    {
        return $this->currentClient;
    }

    /**
     * Add careData.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceUser $careData
     *
     * @return ServiceUser
     */
    public function addCareData(\Inshore\CareQualityBundle\Entity\ServiceUser $careData)
    {
        $this->CareDatas[] = $careData;

        return $this;
    }

    /**
     * Remove careData.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceUser $careData
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCareData(\Inshore\CareQualityBundle\Entity\ServiceUser $careData)
    {
        return $this->CareDatas->removeElement($careData);
    }

    /**
     * Get careDatas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCareDatas()
    {
        return $this->CareDatas;
    }



    /**
     * Get fullName.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName." ".strtoupper($this->lastName);
    }





}
