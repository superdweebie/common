<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Stamp;

/**
 * Interface to add updated on stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface UpdatedOnInterface{

    /**
     * The time of update
     *
     * @param timestamp $timestamp
     */
    public function setUpdatedOn($timestamp);

    /**
     * @return timestamp
     */
    public function getUpdatedOn();
}
