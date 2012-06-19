<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Zone;

/**
 * Use on classes that must be aware of the default zone
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface DefaultZoneAwareInterface {

    /**
     * Pass the default zone to a class
     *
     * @param string
     */
    public function setDefaultZone($zone);
}
