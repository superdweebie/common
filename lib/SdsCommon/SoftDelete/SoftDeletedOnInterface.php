<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDelete;

/**
 * Interface to add soft deleted on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftDeletedOnInterface{

    /**
     * The time of soft delete
     *
     * @param timestamp $timestamp
     */
    public function setSoftDeletedOn($timestamp);

    /**
     * @return timestamp
     */
    public function getSoftDeletedOn();
}