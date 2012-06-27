<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Inteface to define a permission on an ControlledObject
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface PermissionInterface{

    /**
     * @param string $role
     * @param string $action
     * @param string $state
     */
    public function __construct($role, $action, $state = null);

    /**
     *
     * @return string
     */
    public function getState();

    /**
     * Get the permission action
     *
     * @return string
     */
    public function getAction();

    /**
     * Get the permission role
     *
     * @return string
     */
    public function getRole();

    /**
     * Flags if the state of the permission is equal to the state of the parent
     * object
     *
     * @return boolean
     */
    public function getStateEqualToParent();

    /**
     *
     * @param boolean $value
     */
    public function setStateEqualToParent($value);
}
