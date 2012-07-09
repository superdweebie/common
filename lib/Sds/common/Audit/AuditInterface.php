<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Audit;

/**
 * Interface for Audits. Audits are used to record the history of changes
 * to a resource
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AuditInterface{

    /**
     * @param string $oldValue
     * @param string $newValue
     * @param timestamp $changedOn
     * @param string $changedBy
     */
    public function __construct($oldValue, $newValue, $changedOn, $changedBy);

    /**
     * @return string
     */
    public function getOldValue();

    /**
     * @return string
     */
    public function getNewValue();

    /**
     * @return timestamp
     */
    public function getChangedOn();

    /**
     * Will return the username of the user passed to the constructor
     *
     * @return string
     */
    public function getChangedBy();
}
