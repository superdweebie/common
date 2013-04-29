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
    public function __construct($from, $to);

    /**
     *
     * @return string
     */
    public function getFrom();

    /**
     *
     * @return string
     */
    public function getTo();

    /**
     *
     * @return string
     */
    public function getAction();

}
