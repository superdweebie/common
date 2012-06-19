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
    const CREATE = 'create';

    /**
     * Access a resouce and read it's content
     */
    const READ = 'read';

    /**
     * Change a resouce's content
     */
    const UPDATE = 'update';

    /**
     * Mark a resouce as deleted, but do not actually remove it
     */
    const SOFT_DELETE = 'soft-delete';

    /**
     * Unmark a resource as deleted
     */
    const RESTORE = 'restore';

    /**
     * Make a resource disappear, never to come back again!
     */
    const DELETE = 'delete';
}
