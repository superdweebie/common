<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl;

/**
 * Defines methods for a manager object to check permssions
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AccessControllerInterface {

    /**
     * Get the permitted actions for the supplied identity for the supplied state
     * on the supplied object.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param array $roles
     * @param state
     *
     * @return array
     */
    static public function getAllowedActions(
        AccessControlledInterface $object,
        array $roles = [],
        $state = null
    );

    /**
     * Check if the given identity is allowed to do the given action on the given
     * object.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param string $action
     * @param array $roles
     * @param state
     *
     * @return boolean
     */
    static public function isActionAllowed(
        AccessControlledInterface $object,
        $action,
        array $roles = [],
        $state = null
    );
}

?>
