<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\AccessControl\Constant;

/**
 * Defines commonly used state constants. States are normally used to
 * denote points in a resource workflow
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class State {

    /**
     * Used for resources created, but not yet complete
     */
    const DRAFT = 'draft';

    /**
     * Used for resources under review
     */
    const REVIEW = 'review';

    /**
     * Used for resources approved for publication, but not yet published
     */
    const APPROVED = 'approved';

    /**
     * Used for published resources
     */
    const PUBLISHED = 'published';
}