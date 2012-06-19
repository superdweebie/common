<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

/**
 * Use on classes that must be aware of the active user.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ActiveUserAwareInterface{

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\User\UserInterface $activeUser
     */
    public function setActiveUser(UserInterface $activeUser);
}
