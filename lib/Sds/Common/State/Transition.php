<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\State;

/**
 * Implementation of Sds\Common\Workflow\TransitionInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Transition implements TransitionInterface
{

    /**
     *
     * @var string
     */
    protected $fromState;

    /**
     *
     * @var string
     */
    protected $toState;

    public function __construct($fromState, $toState){
        $this->fromState = (string) $fromState;
        $this->toState = (string) $toState;
    }

    public function getFromState() {
        return $this->fromState;
    }

    public function getToState() {
        return $this->toState;
    }

    public function getAction() {
        return $this->fromState . '-' . $this->toState;
    }
}
