<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDeleted;

/**
 * Interface to add restored on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface RestoredOnInterface{

    /**
     * The time of restore
     *
     * @param timestamp $timestamp
     */
    public function setRestoredOn($timestamp);

    /**
     * @return timestamp
     */
    public function getRestoredOn();
}