<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Identity;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface CredentialInterface {

    /**
     * Returns credential (normally hashed)
     *
     * @return string
     */
    public function getCredential();

    /**
     *
     * @param string $plaintext
     */
    public function setCredential($plaintext);
}
