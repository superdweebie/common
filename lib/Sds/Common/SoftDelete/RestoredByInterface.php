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
     * The identity who restored
     *
     * @param string $name
     */
    public function setRestoredBy($name);

    /**
     * Return the name of the identity who restored
     *
     * @param string
     */
    public function getRestoredBy();
}
