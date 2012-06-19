<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl;

/**
 * Can be used to implement the SdsCommon\AccessControl\DefaultUserAwareInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
trait DefaultUserAwareTrait {

    /**
     * @var \SdsCommon\AccessControl\RoleAwareUserInterface $defaultUser
     */
    protected $defaultUser;

    /**
     * Pass the default user to a class
     *
     * @param \SdsCommon\AccessControl\RoleAwareUserInterface $defaultUser
     */
    public function setDefaultUser(RoleAwareUserInterface $defaultUser){
        $this->defaultUser = $defaultUser;
    }
}
