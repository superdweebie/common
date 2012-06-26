<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\User;

/**
 * Can be used to implement the SdsCommon\User\ActiveUserAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait ActiveUserAwareTrait {

    /**
     * @var \SdsCommon\User\UserInterface $activeUser
     */
    protected $activeUser;

    /**
     *
     * @var boolean
     */
    protected $requireRoleAwareUser = false;

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\User\UserInterface $activeUser
     */
    public function setActiveUser(UserInterface $activeUser){
        $this->activeUser = $activeUser;
        $this->checkActiveUser();
    }

    /**
     *
     * @return \SdsCommon\User\UserInterface
     */
    public function getActiveUser(){
        return $this->activeUser;
    }

    /**
     *
     * @param boolean $requireRoleAwareUser
     */
    public function setRequireRoleAwareUser($requireRoleAwareUser){
        $this->requireRoleAwareUser = (boolean) $requireRoleAwareUser;
        $this->checkActiveUser();
    }

    /**
     *
     * @return boolean
     */
    public function getRequireRoleAwareUser(){
        return $this->requireRoleAwareUser;
    }

    /**
     *
     * @throws \Exception
     */
    protected function checkActiveUser(){
        if ($this->requireRoleAwareUser &&
            isset($this->activeUser) &&
            ! $this->activeUser instanceof RoleAwareUserInterface
        ){
            throw new \Exception('Supplied activeUser does not implement the SdsCommon\User\RoleAwareUserInterface');
        }
    }
}
