<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Stamp;

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
     * @param timestamp $timestamp
     */
    public function setCreatedOn($timestamp);

    /**
     * @return timestamp
     */
    public function getCreatedOn();
}
