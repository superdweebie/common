<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\SoftDelete;

/**
 * Interface to add restored by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface RestoredByInterface{

    /**
     * The username who restored
     *
     * @param string $username
     */
    public function setRestoredBy($username);

    /**
     * Return the username of the user who restored
     *
     * @param string
     */
    public function getRestoredBy();
}
