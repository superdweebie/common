<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\SoftDelete;

/**
 * Interface to add soft deleted by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SoftDeletedByInterface{

    /**
     * The identity who soft deleted
     *
     * @param string $name
     */
    public function setSoftDeletedBy($name);

    /**
     * Return the name of the identity who soft deleted
     *
     * @param string
     */
    public function getSoftDeletedBy();
}
