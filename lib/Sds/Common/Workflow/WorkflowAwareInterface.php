<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Workflow;

use Sds\Common\State\StateAwareInterface;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface WorkflowAwareInterface extends StateAwareInterface {

    /**
     *
     * @param \Sds\Common\Workflow\WorkflowInterface $workflow
     */
    public function setWorkflow(WorkflowInterface $workflow);

    /**
     *
     * @return \Sds\Common\Workflow\WorkflowInterface
     */
    public function getWorkflow();
}
