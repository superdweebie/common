<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDelete;

/**
 * Interface to add restored by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftRestoredByInterface{

    /**
     * The username who restored
     *
     * @param string $username
     */
    public function setSoftRestoredBy($username);

    /**
     * Return the username of the user who restored
     *
     * @param string
     */
    public function getSoftRestoredBy();
}
