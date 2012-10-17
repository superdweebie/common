<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl;

/**
 * Defines methods an identity needs to interact with AccessControl
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AccessControlIdentityInterface {

    /**
     * Get the complete roles array
     *
     * @return array
     */
    public function getRoles();

    /**
     * Check if an identity has the supplied role
     *
     * @param string $role
     * @return boolean
     */
    public function hasRole($role);
}
