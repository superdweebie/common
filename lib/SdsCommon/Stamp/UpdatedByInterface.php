<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Stamp;

/**
 * Interface to add updated by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface UpdatedByInterface{

    /**
     * The user who updated
     *
     * @param string $username
     */
    public function setUpdatedBy($username);

    /**
     * Return the user name of the user who updated
     *
     * @param string
     */
    public function getUpdatedBy();
}
