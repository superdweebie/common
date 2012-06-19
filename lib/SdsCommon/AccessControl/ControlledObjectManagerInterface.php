<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Defines methods for a manager object to check permssions
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ControlledObjectManagerInterface extends ActiveUserAwareInterface {

    /**
     * Get the permissions of the supplied user for the supplied state
     * on the supplied object.
     * If no user is supplied, the activeUser is assumed.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param RoleAwareUserInterface $user
     * @param state
     *
     * @return array
     */
    public function getUserPermissions(
        ControlledObjectInterface $object,
        RoleAwareUserInterface $user = null,
        $state = null
    );

    /**
     * Check if the given user is allowed to do the given action on the given
     * object.
     * If no user is supplied, the activeUser is assumed.
     * If no state is supplied, the current state of the object is assumed
     *
     * @param ControlledObjectInterface $object
     * @param string $action
     * @param RoleAwareUserInterface $user
     * @param state
     *
     * @return boolean
     */
    public function isActionAllowed(
        ControlledObjectInterface $object,
        $action,
        RoleAwareUserInterface $user = null,
        $state = null
    );
}

?>
