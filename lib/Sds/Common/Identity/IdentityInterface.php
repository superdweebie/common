<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Identity;

/**
 * Basic identity interface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface IdentityInterface{

    /**
     * @return string
     */
    public function getIdentityName();

    /**
     * @param string $name
     */
    public function setIdentityName($name);
}