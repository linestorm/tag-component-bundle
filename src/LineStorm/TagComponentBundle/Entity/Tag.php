<?php

namespace LineStorm\TagComponentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LineStorm\TagComponentBundle\Model\Tag as BaseTag;

/**
 * Class Tag
 *
 * @package LineStorm\TagComponentBundle\Entity
 * @author  Andy Thorne <contrabandvr@gmail.com>
 */
class Tag extends BaseTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
}
