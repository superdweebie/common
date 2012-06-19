<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

/**
 * Can be used to implement the SdsCommon\ActiveUser\DefaultUserAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait DefaultUserAwareTrait {

    /**
     * @var \SdsCommon\User\UserInterface $defaultUser
     */
    protected $defaultUser;

    /**
     * Pass the default user to a class
     *
     * @param \SdsCommon\User\UserInterface $defaultUser
     */
    public function setDefaultUser(UserInterface $defaultUser){
        $this->defaultUser = $defaultUser;
    }
}
