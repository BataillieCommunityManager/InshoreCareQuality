<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Criteria
 *
 * @ORM\Table(name="inshore_criteria")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\CriteriaRepository")
 */
class Criteria
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
     * @ORM\Column(name="Title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Caption", type="string", length=255, nullable=true)
     */
    private $caption;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\SubCategory", inversedBy="Criterias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $SubCategory;






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
     * Set title.
     *
     * @param string $title
     *
     * @return Criteria
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
     * Set caption.
     *
     * @param string $caption
     *
     * @return Criteria
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set subCategory.
     *
     * @param \Inshore\CareQualityBundle\Entity\SubCategory $subCategory
     *
     * @return Criteria
     */
    public function setSubCategory(\Inshore\CareQualityBundle\Entity\SubCategory $subCategory)
    {
        $this->SubCategory = $subCategory;

        return $this;
    }

    /**
     * Get subCategory.
     *
     * @return \Inshore\CareQualityBundle\Entity\SubCategory
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }
}
