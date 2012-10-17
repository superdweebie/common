<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Identity;

use Sds\Common\AccessControl\AccessControlIdentityInterface;

/**
 * May be used in conjunction with the IdentityInterface to give an identity roles
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface RoleAwareIdentityInterface extends AccessControlIdentityInterface{

    /**
     * Set all the roles for a identity - overwrites all existing
     *
     * @param array $roles array of strings
     */
    public function setRoles(array $roles);

    /**
     * Add a single role
     *
     * @param string $role
     */
    public function addRole($role);

    /**
     * Remove a single role
     *
     * @param string $role
     */
    public function removeRole($role);

}
