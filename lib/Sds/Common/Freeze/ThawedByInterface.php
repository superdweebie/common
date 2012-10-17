<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Freeze;

/**
 * Interface to add thawed by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ThawedByInterface{

    /**
     * The identity who thawed
     *
     * @param string $identity
     */
    public function setThawedBy($name);

    /**
     * Return the name of the identity who thawed
     *
     * @param string
     */
    public function getThawedBy();
}
