<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\SoftDelete;

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
     * @param string $username
     */
    public function setSoftDeletedBy($username);

    /**
     * Return the user name of the user who soft deleted
     *
     * @param string
     */
    public function getSoftDeletedBy();
}
