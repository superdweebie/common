<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl\Constant;

/**
 * Defines commonly used role constants
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Role {

    /**
     * Denotes a user that is not authenticated
     */
    const GUEST = 'guest';

    /**
     * A user who has been authenticated
     */
    const USER = 'user';

    /**
     * An authenticated user who has elevated rights
     */
    const ADMIN = 'admin';

    /**
     * An authenticated user who has the highest rights
     */
    const SUPER_ADMIN = 'super-admin';
}
