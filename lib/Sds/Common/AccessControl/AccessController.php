<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl;

use Sds\Common\AccessControl\AccessControllerInterface;
use Sds\Common\AccessControl\AccessControlledInterface;
use Sds\Common\State\StateAwareInterface;

/**
 * Defines methods for a manager object to check permssions
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class AccessController implements AccessControllerInterface{

    /**
     * {@inheritdoc}
     */
    static public function getAllowedActions(
        AccessControlledInterface $object,
        array $roles = [],
        $state = null
    ){
        if (count($roles) == 0){
            return [];
        }

        if ($object instanceof StateAwareInterface && !isset($state)) {
            $state = $object->getState();
        }

        $allowedActions = [];

        foreach ($object->getPermissions() as $permission){
            if ($permission->getState() == $state &&
                in_array($permission->getRole(), $roles)
            ) {
                $allowedActions[] = $permission->getAction();
            }
        }
        return $allowedActions;
    }

    /**
     * {@inheritdoc}
     */
    static public function isActionAllowed(
        AccessControlledInterface $object,
        $action,
        array $roles = [],
        $state = null
    ){
        if (count($roles) == 0){
            return false;
        }

        if ($object instanceof StateAwareInterface && !isset($state)) {
            $state = $object->getState();
        }

        foreach ($object->getPermissions() as $permission){
            if ($permission->getState() == $state &&
                $permission->getAction() == $action &&
                in_array($permission->getRole(), $roles)
            ) {
                return true;
            }
        }
        return false;
    }
}
