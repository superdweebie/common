<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDelete;

/**
 * Interface for objects with soft delete ability
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftDeleteableInterface{

    /**
     * Check if object has been soft deleted
     *
     * @return boolean
     */
    public function getSoftDeleted();

    /**
     * Soft delete the object
     */
    public function softDelete();

    /**
     * Restore the object
     */
    public function restore();
}
