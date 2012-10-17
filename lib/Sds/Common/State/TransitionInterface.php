<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\State;

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

    /**
     * Return the action name for this transition.
     * Used for access control
     *
     * @return string
     */
    public function getAction();
}
