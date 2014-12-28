<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
{
    use ORMBehaviors\Translatable\Translatable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contentNoTranslatable;

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
     * Set contentNoTranslatable
     *
     * @param  string  $contentNoTranslatable
     * @return Product
     */
    public function setContentNoTranslatable($contentNoTranslatable)
    {
        $this->contentNoTranslatable = $contentNoTranslatable;

        return $this;
    }

    /**
     * Get contentNoTranslatable
     *
     * @return string
     */
    public function getContentNoTranslatable()
    {
        return $this->contentNoTranslatable;
    }
}
