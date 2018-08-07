<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="inshore_category")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->SubCategories = new \Doctrine\Common\Collections\ArrayCollection();
    }




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
     * @ORM\OneToMany(targetEntity="Inshore\CareQualityBundle\Entity\SubCategory", mappedBy="Category")
     */
    private $SubCategories;

















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
     * @return Category
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
     * @return Category
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
     * Add subCategory.
     *
     * @param \Inshore\CareQualityBundle\Entity\SubCategory $subCategory
     *
     * @return Category
     */
    public function addSubCategory(\Inshore\CareQualityBundle\Entity\SubCategory $subCategory)
    {
        $this->SubCategories[] = $subCategory;

        return $this;
    }

    /**
     * Remove subCategory.
     *
     * @param \Inshore\CareQualityBundle\Entity\SubCategory $subCategory
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSubCategory(\Inshore\CareQualityBundle\Entity\SubCategory $subCategory)
    {
        return $this->SubCategories->removeElement($subCategory);
    }

    /**
     * Get subCategories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubCategories()
    {
        return $this->SubCategories;
    }
}
