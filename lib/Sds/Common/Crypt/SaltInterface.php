<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Crypt;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 *
 */
interface SaltInterface {
    
    /**
     * Returns a salt value that can be used in a hash
     */
    public static function getSalt();
    
}
