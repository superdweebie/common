<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Workflow;

/**
 * 
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 *
 * @ODM\EmbeddedDocument
 */
interface TransitionInterface
{
    /**
     * 
     * @param string $fromState
     * @param string $toState
     */
    public function __construct($fromState, $toState);

    /**
     *
     * @return string
     */
    public function getFromState();

    /**
     *
     * @return string
     */
    public function getToState();
}
