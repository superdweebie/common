<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl;

/**
 * Inteface to define a permission on an ControlledObject
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface PermissionInterface{

    public function isAllowed(array $roles, $action);

}
