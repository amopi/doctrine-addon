<?php
/**
 * Created by PhpStorm.
 * User: amopi
 * Date: 2016-05-11
 * Time: 15:00
 */

namespace Amopi\Mlib\Doctrine;

trait AutoIdTrait
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
