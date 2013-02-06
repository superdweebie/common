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
class Salt implements SaltInterface {

    /**
     * Generates a random string
     *
     * @return string
     */
    public static function generateSalt(
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
        $saltLength = 30
    ){
        return substr(str_shuffle(str_repeat((string) $chars,10)),0, (int) $saltLength);
    }

    public static function getSalt(){
        return self::generateSalt();
    }
}

