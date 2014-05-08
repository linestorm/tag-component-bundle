<?php

namespace LineStorm\TagComponentBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use LineStorm\Content\Model\ContentNodeInterface;

/**
 * Class Tag
 *
 * @package LineStorm\TagComponentBundle\Model
 */
abstract class Tag
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTime
     */
    protected $createdOn;

    /**
     * @var ContentNodeInterface
     */
    protected $contentNodes;

    /**
     * Initialise Content Node Collections
     */
    public function __construct()
    {
        $this->contentNodes = new ArrayCollection();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tag
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
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Tag
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param ContentNodeInterface $contentNodes
     */
    public function addContentNode(ContentNodeInterface $contentNodes)
    {
        $this->contentNodes[] = $contentNodes;
    }

    /**
     * @param ContentNodeInterface $contentNodes
     */
    public function removeContentNode(ContentNodeInterface $contentNodes)
    {
        $this->contentNodes->removeElement($contentNodes);
    }

    /**
     * @return ContentNodeInterface
     */
    public function getContentNodes()
    {
        return $this->contentNodes;
    }



}
