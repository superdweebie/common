<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Stamp;

/**
 * Interface to add created on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface CreatedOnInterface{

    /**
     * The time of create
     *
     * @param mixed $timestamp
     */
    public function setCreatedOn($timestamp);

    /**
     * @return mixed
     */
    public function getCreatedOn();
}
