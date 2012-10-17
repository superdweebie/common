<?php

namespace Sds\Common\Test\Workflow;

use Sds\Common\Test\Workflow\TestAsset;

class WorkflowTest extends \PHPUnit_Framework_TestCase {

    public function testGoodWorkflow(){

        $workflow = new TestAsset\SimpleWorkflow();
        $this->assertTrue($workflow->checkIntegrity());
    }

    /**
     * @expectedException Sds\Common\Exception\BadWorkflowException
     */
    public function testUnreachableState(){

        $workflow = new TestAsset\UnreachableStateWorkflow();
        $workflow->checkIntegrity();
    }

    /**
     * @expectedException Sds\Common\Exception\BadWorkflowException
     */
    public function testUnusedTransitions(){

        $workflow = new TestAsset\UnusedTransitionsWorkflow();
        $workflow->checkIntegrity();
    }
}