<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDelete;

use SdsCommon\User\UserInterface;

/**
 * Interface to add soft deleted by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftDeletedByInterface{

    /**
     * The user who soft deleted
     *
     * @param /SdsCommon/User/UserInterface $user
     */
    public function setSoftDeletedBy(UserInterface $user);

    /**
     * Return the user name of the user who soft deleted
     *
     * @param string
     */
    public function getSoftDeletedBy();
}
