<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl;

/**
 * Defines methods for a resource to be access controlled
 *
 * Access control is based on several factors:
 *
 * State: Each resource always has a state. That state indicates the resources
 * progress through a workflow.
 *
 * Permissions: Permissions assign roles to actions in a state. That is, a
 * permission may grant the IDENTITY role permission to do the UPDATE action when in
 * the DRAFT state. Permissions only grant, they do not deny.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AccessControlledInterface{

    /**
     * Set all permissions
     *
     * @param array $permissions An array of PermissionInterface objects
     */
    public function setPermissions($permissions);

    /**
     * Add a permission to the permissions array
     *
     * @param PermissionInterface $permission
     */
    public function addPermission(PermissionInterface $permission);

    /**
     *
     * @param \Sds\Common\AccessControl\PermissionInterface $permission
     */
    public function removePermission(PermissionInterface $permission);

    /**
     * Get all permissions
     *
     * @return array
     */
    public function getPermissions();
}
