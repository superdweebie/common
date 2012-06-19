<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDeleted;

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
     * @param mixed $timestamp
     */
    public function setSoftDeletedOn($timestamp);

    /**
     * @return mixed
     */
    public function getSoftDeletedOn();
}