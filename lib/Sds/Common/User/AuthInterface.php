<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\User;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AuthInterface {

    /**
     * Returns encrypted password
     *
     * @return string
     */
    public function getPassword();

    /**
     *
     * @param string $plaintext
     */
    public function setPassword($plaintext);
}
