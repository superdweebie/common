<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Use on classes that must be aware of the default user, and expect that user
 * to have roles.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface DefaultUserAwareInterface{

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\AccessControl\RoleAwareUserInterface $defaultUser
     */
    public function setDefaultUser(RoleAwareUserInterface $defaultUser);
}
