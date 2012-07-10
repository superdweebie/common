<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Freeze;

/**
 * Interface to add thawed on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ThawedOnInterface{

    /**
     * The time of thaw
     *
     * @param timestamp $timestamp
     */
    public function setThawedOn($timestamp);

    /**
     * @return timestamp
     */
    public function getThawedOn();
}