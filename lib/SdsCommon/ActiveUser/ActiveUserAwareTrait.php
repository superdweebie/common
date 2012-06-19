<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

/**
 * Can be used to implement the SdsCommon\ActiveUser\ActiveUserAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait ActiveUserAwareTrait {

    /**
     * @var \SdsCommon\User\UserInterface $activeUser
     */
    protected $activeUser;

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\User\UserInterface $activeUser
     */
    public function setActiveUser(UserInterface $activeUser){
        $this->activeUser = $activeUser;
    }
}
