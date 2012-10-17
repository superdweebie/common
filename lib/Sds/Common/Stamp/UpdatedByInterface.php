<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Stamp;

/**
 * Interface to add updated by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface UpdatedByInterface{

    /**
     * The identity who updated
     *
     * @param string $name
     */
    public function setUpdatedBy($name);

    /**
     * Return the name of the identity who updated
     *
     * @param string
     */
    public function getUpdatedBy();
}
