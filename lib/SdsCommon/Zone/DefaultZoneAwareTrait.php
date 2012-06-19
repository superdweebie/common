<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Zone;

/**
 * Can be used to implement the SdsCommon\Zone\DefaultZoneAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait DefaultZoneAwareTrait {

    /**
     * @var string
     */
    protected $defaultZone;

    /**
     * Pass the default zone to a class
     *
     * @param string $defaultZone
     */
    public function setDefaultZone($defaultZone){
        $this->defaultZone = (string) $defaultZone;
    }
}