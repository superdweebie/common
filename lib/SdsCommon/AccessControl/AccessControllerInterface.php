<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

use SdsCommon\User\RoleAwareUserInterface;

/**
 * Defines methods for a manager object to check permssions
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AccessControllerInterface {

    /**
     * Get the permitted actions for the supplied user for the supplied state
     * on the supplied object.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param RoleAwareUserInterface $user
     * @param state
     *
     * @return array
     */
    static public function getAllowedActions(
        AccessControlledInterface $object,
        RoleAwareUserInterface $user,
        $state = null
    );

    /**
     * Check if the given user is allowed to do the given action on the given
     * object.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param string $action
     * @param RoleAwareUserInterface $user
     * @param state
     *
     * @return boolean
     */
    static public function isActionAllowed(
        AccessControlledInterface $object,
        $action,
        RoleAwareUserInterface $user,
        $state = null
    );
}

?>
