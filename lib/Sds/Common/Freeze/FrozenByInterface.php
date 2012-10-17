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
     * The identity who froze
     *
     * @param string $name
     */
    public function setFrozenBy($name);

    /**
     * Return the name of the identity who froze
     *
     * @param string
     */
    public function getFrozenBy();
}
