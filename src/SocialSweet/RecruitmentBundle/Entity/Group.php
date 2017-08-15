<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 14/08/17
 * Time: 18:49
 */

namespace SocialSweet\RecruitmentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\Group as BaseGroup;

class Group extends BaseGroup
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct($name = '', $roles = array())
    {
        parent::__construct($name, $roles);
        $this->users = new ArrayCollection();
    }

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
     * Add users
     *
     * @param User $user
     * @return Group
     * @internal param User $users
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
        return $this;
    }

    /**
     * Remove users
     *
     * @param User $users
     */
    public function removeUser(User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function __toString()
    {
        if(is_string($this->name)) {
            return $this->name;
        }
        return '';
    }

    public function translationKey()
    {
        if(is_string($this->name)) {
            return strtolower(sprintf('user.group.%s', $this->name));
        }
        return '';
    }
}