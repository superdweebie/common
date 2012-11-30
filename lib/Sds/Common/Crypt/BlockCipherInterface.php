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
interface BlockCipherInterface {

    public static function encrypt($painText, $key, $salt = null);

    public static function decrypt($encryptedText, $key);
}
