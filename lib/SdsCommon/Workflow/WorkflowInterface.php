<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Workflow;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface WorkflowInterface
{

    /**
     * 
     * @param string $startState
     * @param array $possibleStates
     * @param \Doctrine\Common\Collections\ArrayCollection $possibleTransforms
     * @param array $vars
     */
    public function __construct(
        $startState,
        array $possibleStates,
        ArrayCollection $possibleTransforms,
        array $vars = array()
    );

    /**
     * The state the object will be in immediately after creation
     *
     * @return string
     */
    public function getStartState();

    /**
     * An array of strings will all possible state names
     *
     * @return array
     */
    public function getPossibleStates();

    /**
     * An array of Transition documents
     *
     * @return array
     */
    public function getPossibleTransitions();

    /**
     * An array to store arbitary workflow variables
     *
     * @return array
     */
    public function getVars();

    /**
     *
     * @param array $vars
     */
    public function setVars(array $vars);
}
