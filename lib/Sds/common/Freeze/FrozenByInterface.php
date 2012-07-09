<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Freeze;

/**
 * Interface to add fozen by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface FrozenByInterface{

    /**
     * The user who froze
     *
     * @param string $username
     */
    public function setFrozenBy($username);

    /**
     * Return the user name of the user who froze
     *
     * @param string
     */
    public function getFrozenBy();
}
