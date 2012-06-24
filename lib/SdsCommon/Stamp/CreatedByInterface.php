<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Stamp;

/**
 * Interface to add created by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface CreatedByInterface{

    /**
     * The user who created
     *
     * @param string $username
     */
    public function setCreatedBy($username);

    /**
     * Return the user name of the user who created
     *
     * @param string
     */
    public function getCreatedBy();
}