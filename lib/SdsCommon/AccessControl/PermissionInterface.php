<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

use SdsCommon\State\StateAwareInterface;

/**
 * Inteface to define a permission on an ControlledObject
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface PermissionInterface extends StateAwareInterface{

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
     * @param string $role
     * @param string $action
     * @param string $state
     */
    public function __construct($role, $action, $state = null);
}
