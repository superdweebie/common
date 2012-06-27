<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Workflow;

use SdsCommon\State\StateAwareInterface;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface WorkflowAwareInterface extends StateAwareInterface {

    /**
     *
     * @param \SdsCommon\Workflow\WorkflowInterface $workflow
     */
    public function setWorkflow(WorkflowInterface $workflow);

    /**
     *
     * @return \SdsCommon\Workflow\WorkflowInterface
     */
    public function getWorkflow();
}
