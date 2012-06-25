<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl\Constant;

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
     * Mark a resouce as deleted, but do not actually remove it
     */
    const softDelete = 'softDelete';

    /**
     * Unmark a resource as deleted
     */
    const restore = 'restore';

    /**
     * Mark a resouce as frozen
     */
    const freeze = 'freeze';

    /**
     * Unmark a resouce as frozen
     */
    const thaw = 'thaw';

    /**
     * Make a resource disappear, never to come back again!
     */
    const delete = 'delete';
}
