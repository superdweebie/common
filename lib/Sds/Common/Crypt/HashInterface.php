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
interface HashInterface {

    /**
     * Creates a sha1 hash of a string using a salt, and prepends that salt
     * to the return string
     *
     * @param string $salt
     * @param string $plaintext
     * @return string
     */
    public static function hash($salt, $plaintext);

    public static function hashAndPrependSalt($salt, $plaintext);

}

