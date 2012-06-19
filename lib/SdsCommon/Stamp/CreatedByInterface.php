<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Stamp;

use SdsCommon\User\UserInterface;

/**
 * Interface to add created by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface CreatedByInterface{

    /**
     * The user who created
     *
     * @param /SdsCommon/User/UserInterface $user
     */
    public function setCreatedBy(UserInterface $user);

    /**
     * Return the user name of the user who created
     *
     * @param string
     */
    public function getCreatedBy();
}