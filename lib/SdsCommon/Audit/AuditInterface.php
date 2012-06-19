<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Audit;

use SdsCommon\User\UserInterface;

/**
 * Interface for Audits. Audits are used to record the history of changes
 * to a resource
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AuditInterface{

    /**
     * @param mixed $oldValue
     * @param mixed $newValue
     * @param mixed $changedOn
     * @param \SdsCommon\User\UserInterface $changedBy
     */
    public function __construct($oldValue, $newValue, $changedOn, UserInterface $changedBy);

    /**
     * @return mixed
     */
    public function getOldValue();

    /**
     * @return mixed
     */
    public function getNewValue();

    /**
     * @return mixed
     */
    public function getChangedOn();

    /**
     * Will return the username of the user passed to the constructor
     *
     * @return string
     */
    public function getChangedBy();
}
