<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Stamp;

/**
 * Interface to add created by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface CreatedByInterface{

    /**
     * The identity who created
     *
     * @param string $name
     */
    public function setCreatedBy($name);

    /**
     * Return the name of the identity who created
     *
     * @param string
     */
    public function getCreatedBy();
}