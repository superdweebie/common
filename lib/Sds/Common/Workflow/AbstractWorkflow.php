<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Workflow;

use Sds\Common\Exception\BadWorkflowException;

/**
 * Implementation of Sds\Common\Workflow\WorkflowInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
abstract class AbstractWorkflow implements WorkflowInterface
{

    /**
     * @var string
     */
    protected $startState;

    /**
     * var array
     */
    protected $possibleStates;

    /**
     * @var array
     */
    protected $transitions;

    /**
     * The state the object will be in immediately after creation
     *
     * @return string
     */
    public function getStartState() {
        return $this->startState;
    }

    /**
     * An array of strings will all possible state names
     *
     * @return array
     */
    public function getPossibleStates() {
        return $this->possibleStates;
    }

    /**
     * An array of Transition documents
     *
     * @return array
     */
    public function getTransitions() {
        return $this->transitions;
    }

    /**
     * Check that the workflow makes sense
     *
     * @throws \Exception
     */
    public function checkIntegrity(){

        //check that startState is in possibleStates
        if (!(in_array($this->startState, $this->possibleStates))){
            throw new BadWorkflowException(sprintf('startState %s is not in possibleStates', $this->startState));
        }

        //check that every possibleState can be reached from startState via transitions
        if ($this->possibleStates instanceof ArrayCollection) {
            $possibleStates = $this->possibleStates->toArray();
        } else {
            $possibleStates = $this->possibleStates;
        }
        $visitedStates = array($this->startState);

        if ($this->transitions instanceof ArrayCollection) {
            $unusedTransitions = $this->transitions->toArray();
        } else {
            $unusedTransitions = $this->transitions;
        }

        do {
            $visitedCount = count($visitedStates);
            foreach($unusedTransitions as $key => $transition){
                foreach($visitedStates as $state){
                    if($transition->getFromState() == $state &&
                        !in_array($transition->getToState(), $visitedStates)
                    ){
                        $visitedStates[] = $transition->getToState();
                        unset($unusedTransitions[$key]);
                    }
                }
            }
        } while (count($visitedStates) > $visitedCount);

        if (count($visitedStates) != count($possibleStates)){
            throw new BadWorkflowException('defined transitions do not allow every possible state to be reached');
        }

        // Check for dead transitions
        foreach ($unusedTransitions as $transition) {
            if (!in_array($transition->getFromstate(), $visitedStates)) {
                throw new BadWorkflowException(sprintf(
                    'Workflow has a dead transition: %s to %s',
                    $transition->getFromState(),
                    $transition->getToState()
                ));
            }
        }

        return true;
    }    
}
