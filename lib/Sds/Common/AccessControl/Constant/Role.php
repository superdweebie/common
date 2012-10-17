<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\AccessControl\Constant;

/**
 * Defines commonly used role constants
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Role {

    /**
     * Denotes an identity that is not authenticated
     */
    const guest = 'guest';

    /**
     * A identity who has been authenticated
     */
    const user = 'user';

    /**
     * An authenticated identity who has elevated rights
     */
    const admin = 'admin';

    /**
     * An authenticated identity who has the highest rights
     */
    const superAdmin = 'superAdmin';
}
