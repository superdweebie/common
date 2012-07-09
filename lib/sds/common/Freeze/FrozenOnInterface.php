<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Freeze;

/**
 * Interface to add frozen on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface FrozenOnInterface{

    /**
     * The time of freeze
     *
     * @param timestamp $timestamp
     */
    public function setFrozenOn($timestamp);

    /**
     * @return timestamp
     */
    public function getFrozenOn();
}