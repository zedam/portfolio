<?php

namespace Zeta\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $labels;

    /**
     * @var boolean
     */
    private $isMobile;

    /**
     * @var boolean
     */
    private $isTablet;

    /**
     * @var boolean
     */
    private $isDesktop;

    /**
     * @var boolean
     */
    private $isRetina;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $size;

    /**
     * @var integer
     */
    private $category_id;


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
     * Set title
     *
     * @param string $title
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Project
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Project
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return Project
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set labels
     *
     * @param string $labels
     * @return Project
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return string 
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set isMobile
     *
     * @param boolean $isMobile
     * @return Project
     */
    public function setIsMobile($isMobile)
    {
        $this->isMobile = $isMobile;

        return $this;
    }

    /**
     * Get isMobile
     *
     * @return boolean 
     */
    public function getIsMobile()
    {
        return $this->isMobile;
    }

    /**
     * Set isTablet
     *
     * @param boolean $isTablet
     * @return Project
     */
    public function setIsTablet($isTablet)
    {
        $this->isTablet = $isTablet;

        return $this;
    }

    /**
     * Get isTablet
     *
     * @return boolean 
     */
    public function getIsTablet()
    {
        return $this->isTablet;
    }

    /**
     * Set isDesktop
     *
     * @param boolean $isDesktop
     * @return Project
     */
    public function setIsDesktop($isDesktop)
    {
        $this->isDesktop = $isDesktop;

        return $this;
    }

    /**
     * Get isDesktop
     *
     * @return boolean 
     */
    public function getIsDesktop()
    {
        return $this->isDesktop;
    }

    /**
     * Set isRetina
     *
     * @param boolean $isRetina
     * @return Project
     */
    public function setIsRetina($isRetina)
    {
        $this->isRetina = $isRetina;

        return $this;
    }

    /**
     * Get isRetina
     *
     * @return boolean 
     */
    public function getIsRetina()
    {
        return $this->isRetina;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Project
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Project
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @var \Zeta\ProjectBundle\Entity\Category
     */
    private $category;



    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="categories")
     * @ORM\OrderBy({"id" = "ASC"})
     */
    private $categories;


    /**
     * Set category
     *
     * @param \Zeta\ProjectBundle\Entity\Category $category
     * @return Project
     */
    public function setCategory(\Zeta\ProjectBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Zeta\ProjectBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Set category_id
     *
     * @param integer $categoryId
     * @return Project
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add images
     *
     * @param \Zeta\ProjectBundle\Entity\Image $images
     * @return Image
     */
    public function addImage(\Zeta\ProjectBundle\Entity\Image $image)
    {
        $image->setProject($this);

        $this->images->add($image);
    }

    /**
     * Remove images
     *
     * @param \Zeta\ProjectBundle\Entity\Image $images
     */
    public function removeImage(\Zeta\ProjectBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

}
