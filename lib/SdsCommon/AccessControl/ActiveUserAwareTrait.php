<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Can be used to implement the SdsCommon\AccessControl\ActiveUserAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait ActiveUserAwareTrait {

    /**
     * @var \SdsCommon\AccessControl\RoleAwareUserInterface $activeUser
     */
    protected $activeUser;

    /**
     * Pass the active user to a class
     *
     * @param \SdsCommon\AccessControl\RoleAwareUserInterface $activeUser
     */
    public function setActiveUser(RoleAwareUserInterface $activeUser){
        $this->activeUser = $activeUser;
    }
}
