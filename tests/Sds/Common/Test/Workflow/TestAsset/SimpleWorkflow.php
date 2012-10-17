<?php

namespace Sds\Common\Test\Workflow\TestAsset;

use Sds\Common\Workflow\AbstractWorkflow;
use Sds\Common\State\Transition;

class SimpleWorkflow extends AbstractWorkflow {

    protected $startState = 'draft';

    protected $possibleStates = array('draft', 'approved', 'published');

    protected $transitions = array();

    public function __construct(){
        $this->transitions = array(
            new Transition('draft', 'approved'),
            new Transition('approved', 'published'),
            new Transition('published', 'approved')
        );
    }

    public function update($document){
        $document->setNumStateChanges($document->getNumStateChanges() + 1);
    }
}
