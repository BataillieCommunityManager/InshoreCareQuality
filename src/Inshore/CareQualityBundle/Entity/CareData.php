<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CareData
 *
 * @ORM\Table(name="inshore_care_data")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\CareDataRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class CareData
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
     * @var \DateTime
     *
     * @ORM\Column(name="StartDate", type="date")
     */
    private $startDate;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\Criteria")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Criteria;

    /**
     * @var float
     *
     * @ORM\Column(name="Value", type="float")
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit", type="string", length=255, nullable=true)
     */
    private $unit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastUpdate", type="datetime")
     */
    private $lastUpdate;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\ServiceUser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ServiceUser;








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
     * Set startDate.
     *
     * @param \DateTime $startDate
     *
     * @return CareData
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return CareData
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set value.
     *
     * @param float $value
     *
     * @return CareData
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set unit.
     *
     * @param string|null $unit
     *
     * @return CareData
     */
    public function setUnit($unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit.
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set caption.
     *
     * @param string|null $caption
     *
     * @return CareData
     */
    public function setCaption($caption = null)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption.
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set lastUpdate.
     *
     * @param \DateTime $lastUpdate
     *
     * @return CareData
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate.
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set criteria.
     *
     * @param \Inshore\CareQualityBundle\Entity\Criteria $criteria
     *
     * @return CareData
     */
    public function setCriteria(\Inshore\CareQualityBundle\Entity\Criteria $criteria)
    {
        $this->Criteria = $criteria;

        return $this;
    }

    /**
     * Get criteria.
     *
     * @return \Inshore\CareQualityBundle\Entity\Criteria
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }

    /**
     * Set serviceUser.
     *
     * @param \Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser
     *
     * @return CareData
     */
    public function setServiceUser(\Inshore\CareQualityBundle\Entity\ServiceUser $serviceUser)
    {
        $this->ServiceUser = $serviceUser;

        return $this;
    }

    /**
     * Get serviceUser.
     *
     * @return \Inshore\CareQualityBundle\Entity\ServiceUser
     */
    public function getServiceUser()
    {
        return $this->ServiceUser;
    }











    public function __construct()
    {
      $this->startDate    = new \Datetime();
      $this->lastUpdate   = new \Datetime();
    }
  
    /**
     * @ORM\PreUpdate
     */
    public function updateDate()
    {
      $this->setUpdatedAt(new \Datetime());
    }
  
    public function increaseApplication()
    {
      $this->nbApplications++;
    }
  
    public function decreaseApplication()
    {
      $this->nbApplications--;
    }












}
