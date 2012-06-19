<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Use on classes that must be aware of the active user, and expect that user
 * to have roles.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ActiveUserAwareInterface{

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\AccessControl\RoleAwareUserInterface $activeUser
     */
    public function setActiveUser(RoleAwareUserInterface $activeUser);
}
