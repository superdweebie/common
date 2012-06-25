<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Freeze;

/**
 * Interface for objects with freeze ability
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface FreezeableInterface{

    /**
     * Check if object has been frozen
     *
     * @return boolean
     */
    public function getFrozen();

    /**
     * Freeze the object
     */
    public function freeze();

    /**
     * Thaw the object
     */
    public function thaw();
}
