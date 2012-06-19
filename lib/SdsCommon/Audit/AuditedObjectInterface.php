<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Audit;

/**
 * Interface for objects that are audited.
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface AuditedObjectInterface{

    /**
     * Add a new audit to the audit collection
     *
     * @param \SdsCommon\Audit\AuditInterface $audit
     */
    public function addAudit(AuditInterface $audit);

    /**
     * Return an array of all audits
     *
     * @return array
     */
    public function getAudits();
}
