<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\SoftDelete;

/**
 * Interface to add restored on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftRestoredOnInterface{

    /**
     * The time of restore
     *
     * @param timestamp $timestamp
     */
    public function setSoftRestoredOn($timestamp);

    /**
     * @return timestamp
     */
    public function getSoftRestoredOn();
}