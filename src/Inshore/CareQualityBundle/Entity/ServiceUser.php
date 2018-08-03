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
     * @ORM\Column(name="date", type="datetime")
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\Home")
     */
    private $Home;

    /**
     * @var string
     *
     * @ORM\Column(name="Disability", type="string", length=255)
     */
    private $disability;


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
     * Set disability.
     *
     * @param string $disability
     *
     * @return ServiceUser
     */
    public function setDisability($disability)
    {
        $this->disability = $disability;

        return $this;
    }

    /**
     * Get disability.
     *
     * @return string
     */
    public function getDisability()
    {
        return $this->disability;
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
}
