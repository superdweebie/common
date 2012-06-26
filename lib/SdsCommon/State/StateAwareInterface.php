<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\State;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface StateAwareInterface{

    /**
     * Set the current resource state
     *
     * @param string $state
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getState();
}
