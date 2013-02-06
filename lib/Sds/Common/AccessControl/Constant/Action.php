<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl\Constant;

/**
 * Defines commonly used action constants
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Action {

    /**
     * Create a new resource
     */
    const create = 'create';

    /**
     * Access a resouce and read it's content
     */
    const read = 'read';

    /**
     * Change a resouce's content
     */
    const update = 'update';

    /**
     * Make a resource disappear, never to come back again!
     */
    const delete = 'delete';

    /**
     * Update the roles of an identity
     */
    const updateRoles = 'updateRoles';

    /**
     * Update the permissions on a resource
     */
    const updatePermissions = 'updatePermissions';
}
