<?php

namespace Inshore\CareQualityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategory
 *
 * @ORM\Table(name="inshore_sub_category")
 * @ORM\Entity(repositoryClass="Inshore\CareQualityBundle\Repository\SubCategoryRepository")
 */
class SubCategory
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Criterias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Inshore\CareQualityBundle\Entity\Category", inversedBy="SubCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Category;

    /**
     * @ORM\OneToMany(targetEntity="Inshore\CareQualityBundle\Entity\Criteria", mappedBy="SubCategory")
     */
    private $Criterias;



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
     * @return SubCategory
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
     * Set category.
     *
     * @param \Inshore\CareQualityBundle\Entity\Category $category
     *
     * @return SubCategory
     */
    public function setCategory(\Inshore\CareQualityBundle\Entity\Category $category)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \Inshore\CareQualityBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Add criteria.
     *
     * @param \Inshore\CareQualityBundle\Entity\Criteria $criteria
     *
     * @return SubCategory
     */
    public function addCriteria(\Inshore\CareQualityBundle\Entity\Criteria $criteria)
    {
        $this->Criterias[] = $criteria;

        return $this;
    }

    /**
     * Remove criteria.
     *
     * @param \Inshore\CareQualityBundle\Entity\Criteria $criteria
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCriteria(\Inshore\CareQualityBundle\Entity\Criteria $criteria)
    {
        return $this->Criterias->removeElement($criteria);
    }

    /**
     * Get criterias.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCriterias()
    {
        return $this->Criterias;
    }
}
