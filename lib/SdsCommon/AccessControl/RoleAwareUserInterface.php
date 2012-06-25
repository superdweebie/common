<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

use SdsCommon\User\UserInterface;

/**
 * Extends the UserInterface to give a user roles
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface RoleAwareUserInterface extends UserInterface{

    /**
     * Set all the roles for a user - overwrites all existing
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

    /**
     * Get the complete roles array
     *
     * @return array
     */
    public function getRoles();

    /**
     * Check if a user has the supplied role
     *
     * @param string $role
     * @return boolean
     */
    public function hasRole($role);
}
