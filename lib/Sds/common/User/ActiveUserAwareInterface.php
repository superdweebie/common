<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\User;

/**
 * Use on classes that must be aware of the active user.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ActiveUserAwareInterface{

    /**
     * Set if the active user must implement the Sds\Common\User\RoleAwareUserInterface
     *
     * @param boolean $requireRoleAware
     */
    public function setRequireRoleAwareUser($requireRoleAwareUser);

    /**
     * @return boolean
     */
    public function getRequireRoleAwareUser();

    /**
     * Pass the active user to a class
     *
     * @param \Sds\Common\User\UserInterface $activeUser
     */
    public function setActiveUser(UserInterface $activeUser);

    /**
     * @return \Sds\Common\User\UserInterface
     */
    public function getActiveUser();
}
